<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //protected $from_number;

    public function __construct()
    {
        $this->from_number = '123456789'; // replace with actual value
    }

    public function index()
    {
        $messages = Message::latest()->get();
        return view('chatbox', compact('messages'));
    }

    public function chat()
    {
        $messages = Message::orderBy('created_at', 'asc')->get();
        return view('chatbox', compact('messages', 'from_number'));
    }

    public function getMessages()
    {
        $messages = Message::latest()->get();
        return response()->json($messages);
    }

    public function store(Request $request)
    {
        $request->validate([
            'from_number' => 'required|numeric',
            'message_text' => 'required|string',
        ]);
    
        $message = new Message;
        $message->from_number = $request->input('from_number');
        $message->message_text = $request->input('message_text');
        $message->save();
    
        return response()->json([
            'message' => 'Message saved successfully'
        ]);
    }

    public function showChatbox()
    {
        $messages = Message::orderBy('created_at', 'asc')->get();
        return view('chatbox', compact('messages'));
    }
}

