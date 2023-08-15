<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramDocument
 * @package App\Messages
 */
class TelegramDocument extends TelegramEntity
{
	/*** @var string[] */
	protected array $required = [
		'document',
	];

	/*** @var string[] */
	protected array $optional = [
		'caption',
		'disable_notification',
	];
}