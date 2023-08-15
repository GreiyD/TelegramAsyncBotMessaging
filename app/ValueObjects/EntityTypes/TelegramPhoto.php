<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramPhoto
 * @package App\Messages
 */
class TelegramPhoto extends TelegramEntity
{
	/*** @var array|string[] */
	protected array $required = [
		'photo',
	];

	/*** @var array|string[] */
	protected array $optional = [
		'caption',
		'disable_notification',
	];
}