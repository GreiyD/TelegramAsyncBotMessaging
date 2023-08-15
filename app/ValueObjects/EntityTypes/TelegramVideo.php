<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramVideo
 * @package App\Messages
 */
class TelegramVideo extends TelegramEntity
{
	/*** @var array|string[] */
	protected array $required = [
		'video',
	];

	/*** @var array|string[] */
	protected array $optional = [
		'duration',
		'width',
		'height',
		'caption',
		'disable_notification',
	];
}