<?php

namespace App\Models\Factories;

use App\Models\Entity\Sticker;

/**
 * Class StickerFactory
 * @package App\Models\Factories
 */
trait StickerFactory
{

    /**
     * @param Sticker $sticker
     * @param array $params
     * @return Sticker
     */
    public static function stickerFactory(Sticker $sticker, array $params): Sticker
    {
        $sticker->setSticker($params['sticker']);
        $sticker->setCaption($params['caption']);
        $sticker->setType($params['type']);
        $sticker->setIsAnimated($params['is_animated']);
        $sticker->setIsVideo($params['is_video']);
        $sticker->setSetName($params['set_name']);
        $sticker->save();
        $sticker->refresh();
        return $sticker;
    }

}
