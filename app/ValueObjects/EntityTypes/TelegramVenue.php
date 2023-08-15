<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramVenue
 * @package App\Messages
 */
class TelegramVenue extends TelegramEntity
{
	/*** @var array|string[] */
	protected array $required = [
		'latitude',
		'longitude',
		'title',
		'address',
	];

	/*** @var array|string[] */
	protected array $optional = [
		'foursquare_id',
		'disable_notification',
	];
}