<?php

namespace App\ValueObject\Messages;

/**
 * Class TelegramMessage
 * @package App\Messages
 */
class TelegramMessage extends TelegramEntity
{
	/*** @var string[] */
	protected array $required = [
		'text',
	];

	/*** @var string[] */
	protected array $optional = [
		'parse_mode',
		'disable_web_page_preview',
		'disable_notification',
	];

	/**
	 * @param string $subject
	 * @param string $content
	 * @return string
	 */
	public static function default(string $subject, string $content): string
	{
		return sprintf(
			'<b>%s</b>%s%s%s%s%s',
			$subject,
			PHP_EOL,
			'==========================',
			PHP_EOL,
			$content,
			PHP_EOL
		);
	}

	/**
	 * @param string $subject
	 * @param string $content
	 * @return string
	 */
	public static function error(string $subject, string $content): string
	{
		return '❌️ ' . static::default($subject, $content);
	}

	/**
	 * @param string $subject
	 * @param string $content
	 * @return string
	 */
	public static function info(string $subject, string $content): string
	{
		return '✅ ' . static::default($subject, $content);
	}
}