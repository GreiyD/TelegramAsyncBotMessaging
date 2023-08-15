<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramLocation
 * @package App\Messages
 */
class TelegramLocation extends TelegramEntity
{
	/*** @var string[] */
	protected array $required = [
		'latitude',
		'longitude',
	];

	/*** @var string[] */
	protected array $optional = [
		'disable_notification',
	];
}