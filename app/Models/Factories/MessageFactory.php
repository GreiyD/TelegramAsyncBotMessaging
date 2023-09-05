<?php

namespace App\Models\Factories;

use App\Models\Entity\Message;

/**
 * Class MessageFactory
 * @package App\Models\Factories
 */
trait MessageFactory
{

    /**
     * @param Message $message
     * @param array $params
     * @return Message
     */
    public static function messageFactory(Message $message, array $params): Message
    {
        $message->setText($params['text']);
        $message->setCaption($params['caption']);
        $message->save();
        $message->refresh();
        return $message;
    }

}
