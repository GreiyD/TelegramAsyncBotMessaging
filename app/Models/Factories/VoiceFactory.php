<?php

namespace App\Models\Factories;

use App\Models\Entity\Voice;

/**
 * Class VoiceFactory
 * @package App\Models\Factories
 */
trait VoiceFactory
{

    /**
     * @param Voice $voice
     * @param array $params
     * @return Voice
     */
    public static function voiceFactory(Voice $voice, array $params): Voice
    {
        $voice->setVoice($params['voice']);
        $voice->setCaption($params['caption']);
        $voice->setDuration($params['duration']);
        $voice->save();
        $voice->refresh();
        return $voice;
    }

}
