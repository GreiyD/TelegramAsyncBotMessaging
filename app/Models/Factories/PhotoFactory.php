<?php

namespace App\Models\Factories;

use App\Models\Entity\Photo;

/**
 * Class PhotoFactory
 * @package App\Models\Factories
 */
trait PhotoFactory
{

    /**
     * @param Photo $photo
     * @param array $params
     * @return Photo
     */
    public static function photoFactory(Photo $photo, array $params): Photo
    {
        $photo->setFilePath($params['file_path']);
        $photo->setAudio($params['photo']);
        $photo->setCaption($params['caption']);
        $photo->save();
        $photo->refresh();
        return $photo;
    }

}
