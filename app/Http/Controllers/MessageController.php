<?php

namespace App\Http\Controllers;

use App\Services\MessageService;

class MessageController extends Controller
{
    protected $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function sendMessage()
    {
        $message = "Hola, este es un mensaje.";
        return response()->json($this->messageService->send($message));
    }
}
