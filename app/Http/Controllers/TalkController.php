<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\Friends;
//use App\Models\Talk;

class TalkController extends Controller
{
    public function model() {
        $id = Auth::id();
        $user = Auth::user();

        return view('chat.index')->with([
            'userid' => $id,
            'user' => $user,
        ]);
    }
}
