<?php

namespace App\Http\Telegram;

use App\Models\Bot;
use App\Models\Chat;
use App\ValueObject\Messages\TelegramCollection;
use App\ValueObject\Messages\TelegramEntity;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Notifications\Notification;

/**
 * Class TelegramChannel
 * Class TelegramChannel
 * Class TelegramChannel
 * @package App\Notifications\Channels
 */
class TelegramChannel
{
	/*** @var Client */
	private Client $client;
	/*** @var Bot */
	private Bot $bot;
	/*** @var Chat */
	private Chat $chat;

	/**
	 * TelegramChannel constructor.
	 */
	public function __construct(Bot $bot, Chat $chat)
	{
		$this->bot    = $bot;
		$this->chat   = $chat;
		$this->client = new Client(['base_uri' => sprintf('https://api.telegram.org/bot%s/', $this->bot->getToken())]);
	}

	public function send($notifiable, Notification $notification): void
	{
		$entity     = $notification->toTelegram($notifiable);
		$collection = $entity instanceof TelegramCollection ? $entity : new TelegramCollection([$entity]);
		$chatId = $this->chat->getId();
		$collection
			->validate()
			->map(
				function(TelegramEntity $message) use ($chatId) {
					$this->client->post(
						$this->makeUri($message),
						$this->buildPayload($chatId, $message)
					);
				}
			);
	}

	/**
	 * @param TelegramEntity $message
	 * @return string
	 */
	private function makeUri(TelegramEntity $message): string
	{
		return 'send' . (str_replace('Telegram', '', class_basename($message)));
	}

	/**
	 * @param                $chatId
	 * @param TelegramEntity $message
	 * @return array
	 */
	private function buildPayload($chatId, TelegramEntity $message): array
	{
		return [
			'json' => array_merge(
				$message->toArray(),
				['chat_id' => $chatId]
			),
		];
	}
}