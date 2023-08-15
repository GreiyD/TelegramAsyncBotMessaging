<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramVoice
 * @package App\Messages
 */
class TelegramVoice extends TelegramEntity
{

	/*** @var array|string[] */
	protected array $required = [
		'voice',
	];

	/*** @var array|string[] */
	protected array $optional = [
		'caption',
		'duration',
		'disable_notification',
	];
}