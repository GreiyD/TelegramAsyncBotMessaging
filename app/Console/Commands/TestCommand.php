<?php

namespace App\Console\Commands;

use App\Mediator\Notification;
use App\Models\Entity\Audio;
use Illuminate\Console\Command;
use Throwable;

class TestCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 * @var string
	 */
	protected $signature = 'tbot:test-command';

	/**
	 * The console command description.
	 * @var string
	 */
	protected $description = 'Telegram Bot test command';

	/*** @return void */
	public function handle(): void
	{
		try {
			// TODO
			$params    = [
				'audio'                => NULL,
				'file_path'            => 'awdawds222d213222eawd314',
				'caption'              => 'nullable|string',
				'duration'             => 'nullable|string',
				'performer'            => 'nullable|string',
				'title'                => 'nullable|string',
				'disable_notification' => TRUE,
			];
			$audio     = new Audio();
			$validator = $audio->validate($params);
			if ($validator->fails()) {
				print_r($validator->errors());
			}
			// Notification handler example
			try {
				$audio->setData($params);
			} catch (Throwable $e) {
				Notification::developNotification($e);
			}
			echo 'done';
		} catch (Throwable $e) {
			echo $e->getMessage() . PHP_EOL;
		}
	}
}
