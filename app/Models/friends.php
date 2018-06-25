<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class friends extends Model
{
    protected $table = 'friends';
    protected $guarded = array('user_id');
    public $timestamps = false;

    public function getFriendsById($user_id) {
        $data = DB::table($this->table)->where('user_id', $user_id)->get();

        return $data;
    }
}
