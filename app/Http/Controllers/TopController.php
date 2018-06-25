<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\Friends;

class TopController extends Controller
{
    public function model() {
        $users = new Users();
        $user = $users->getData();
        $friends = new Friends();
        $id = Auth::id();
        $friend = $friends->getFriendsById($id);

        return view('top.index')->with([
            'users' => $user,
            'friends' => $friend,
            ]);
    }
}
