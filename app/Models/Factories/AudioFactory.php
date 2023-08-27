<?php

namespace App\Models\Factories;

use App\Models\Entity\Audio;

/**
 * Class AudioFactory
 * @package App\Models\Factories
 */
trait AudioFactory
{

	/**
	 * @param Audio $audio
	 * @param array $params
	 * @return Audio
	 */
	public static function audioFactory(Audio $audio, array $params): Audio
	{
		$audio->setFilePath($params['file_path']);
		$audio->setAudio($params['audio']);
		$audio->setCaption($params['caption']);
		$audio->setDuration($params['duration']);
		$audio->setPerformer($params['performer']);
		$audio->setTitle($params['title']);
		$audio->save();
		$audio->refresh();
		return $audio;
	}

}