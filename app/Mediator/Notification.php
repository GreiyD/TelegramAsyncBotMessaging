<?php

namespace App\Mediator;

use App\Helpers\Telegram;
use Throwable;

/**
 * Class Notifications
 * @package App\Mediators
 */
class Notification
{
	/*** @param Throwable $e */
	public static function developNotification(Throwable $e): void
	{
		try {
			//TODO :: change with env or value object. Or even get id via database.
			$botId    = '827700675';
			$data     = [
				'description' => $e->getMessage(),
				'file'        => $e->getFile(),
				'line'        => $e->getLine(),
			];
			$telegram = new Telegram();
			$telegram->sendMessage($botId, (string) view('report', $data));
		} catch (Throwable $e) {
		}
	}

}
