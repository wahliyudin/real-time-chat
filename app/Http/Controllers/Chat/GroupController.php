<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Websockets\PusherBrodcast;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $user = auth()->user()->id;
        PusherBrodcast::send("private-progress-channel.{$user}", 'progress.fingers.import', ['message' => 'Hello']);
        return view('chat.group.index');
    }
}
