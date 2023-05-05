<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function message (Request $request)
    {
        return [];
    }

    public function showChatbox()
{
    $messages = Message::orderBy('created_at', 'asc')->get();
    return view('chatbox', compact('messages'));
}

public function chat()
{
    $messages = Message::orderBy('created_at', 'asc')->get();
    $from_number = '123456789'; // replace with actual value
    return view('chatbox', compact('messages', 'from_number'));
}


}
