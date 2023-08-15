<?php

namespace App\ValueObject\Messages;

use Illuminate\Support\Str;

/**
 * Class TelegramCollection
 * @package App\Messages
 */
class TelegramCollection
{
	/*** @var array */
	protected array $messages = [];

	/**
	 * @param array $messages
	 */
	public function __construct(array $messages = [])
	{
		$this->messages = $messages;
	}

	/**
	 * @param TelegramEntity $message
	 * @return $this
	 */
	public function put(TelegramEntity $message): self
	{
		$this->messages[] = $message;
		return $this;
	}

	/*** @return $this */
	public function validate(): self
	{
		$this->map(function(TelegramEntity $message) {
			$message->validate();
		});
		return $this;
	}

	/**
	 * @param $callback
	 * @return $this
	 */
	public function map($callback): self
	{
		foreach ($this->messages as $message) {
			$callback($message);
		}
		return $this;
	}

	/**
	 * @param $method
	 * @param $args
	 * @return $this
	 */
	public function __call($method, $args)
	{
		$messageClass = __NAMESPACE__ . '\Telegram' . Str::studly($method);
		if (class_exists($messageClass)) {
			$this->put(new $messageClass(...$args));
		}
		return $this;
	}
}