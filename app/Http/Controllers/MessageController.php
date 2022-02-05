<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Reply;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request, User $user)
    {
        $message = Message::create([
            'user_id' => $user->id,
            'msg' => $request->msg,
        ]);

        return response()->json($message, 201);
    }

    public function reply(Request $request, User $user, $id)
    {
        $reply = Reply::create([
            'user_id' => $user->id,
            'message_id' => (int)$id,
            'msg' => $request->reply,
        ]);


        return response()->json($reply, 201);
    }

    public function getData($link)
    {
        $data = User::where('link', $link)->with('Message.Reply')->first();

        return response()->json($data, 200);
    }
}