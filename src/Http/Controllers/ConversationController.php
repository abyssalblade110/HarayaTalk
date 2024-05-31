<?php

namespace HarayaTalk\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use HarayaTalk\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends BaseController
{
    public function store(Request $request)
    {
        $conversation = Conversation::create(['name' => $request->name]);
        $conversation->users()->attach(auth()->id());
        return response()->json($conversation);
    }

    public function index()
    {
        $conversations = Conversation::with('users')->get();
        return response()->json($conversations);
    }
}