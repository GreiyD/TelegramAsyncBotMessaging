<?php

namespace App\Helpers;

class Telegram
{
    public function sendMessage($chat_id, $message){
        \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot6407639870:AAH7mvX-QhwHFO0l7rmabv14fVHrpniIl2Q/sendMessage',[
            'chat_id' => $chat_id,
            'text' => $message
        ]);
    }
}

