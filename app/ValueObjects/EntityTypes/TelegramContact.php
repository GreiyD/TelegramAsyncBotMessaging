<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramContact
 * @package App\Messages
 */
class TelegramContact extends TelegramEntity
{
	/*** @var string[] */
	protected array $required = [
		'phone_number',
		'first_name',
	];

	/*** @var string[] */
	protected array $optional = [
		'last_name',
		'disable_notification',
	];
}