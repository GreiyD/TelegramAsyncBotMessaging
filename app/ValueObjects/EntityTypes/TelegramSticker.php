<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramSticker
 * @package App\Messages
 */
class TelegramSticker extends TelegramEntity
{
	/*** @var array|string[] */
	protected array $required = [
		'sticker',
	];

	/*** @var array|string[] */
	protected array $optional = [
		'disable_notification',
	];
}