<?php

namespace HarayaTalk\Http\Controllers;

use HarayaTalk\Models\Message;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MessageController extends BaseController

{
    public function store(Request $request)
    {
        $message = Message::create([
            'conversation_id' => $request->conversation_id,
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        return response()->json($message);
    }

    public function index($conversationId)
    {
        $messages = Message::where('conversation_id', $conversationId)->get();
        return response()->json($messages);
    }
}
