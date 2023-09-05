<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramAudio
 * @package App\Messages
 */
class TelegramAudio extends TelegramEntity
{
	/*** @var string[] */
	protected array $required = [
		'audio',
	];

	/*** @var string[] */
	protected array $optional = [
		'caption',
		'duration',
		'performer',
		'title',
		'disable_notification',
	];


}
