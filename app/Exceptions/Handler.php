<?php

namespace App\Exceptions;

use App\Helpers\Telegram;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Обработчик ошибок
     */

    public function report(Throwable $e)
    {
        $data = [
            'description' => $e -> getMessage(),
            'file' => $e -> getFile(),
            'line' => $e -> getLine(),
        ];
        $telegram = new Telegram();
        $telegram->sendMessage(827700675, (string)view('report', $data));
    }

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
