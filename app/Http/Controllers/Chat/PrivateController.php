<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivateController extends Controller
{
    public function index()
    {
        return view('chat.private.index');
    }
}
