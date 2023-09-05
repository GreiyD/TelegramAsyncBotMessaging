<?php

namespace App\Models\Factories;

use App\Models\Entity\Video;

/**
 * Class VideoFactory
 * @package App\Models\Factories
 */
trait VideoFactory
{

    /**
     * @param Video $video
     * @param array $params
     * @return Video
     */
    public static function videoFactory(Video $video, array $params): Video
    {
        $video->setFilePath($params['file_path']);
        $video->setFileName($params['file_name']);
        $video->setAudio($params['audio']);
        $video->setCaption($params['caption']);
        $video->setDuration($params['duration']);
        $video->setWidth($params['width']);
        $video->setHeight($params['height']);
        $video->save();
        $video->refresh();
        return $video;
    }

}
