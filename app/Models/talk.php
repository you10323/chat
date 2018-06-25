<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class talk extends Model
{
    protected $table = 'talk';
    protected $guarded = array('user_id');
    public $timestamps = false;

    public function getData() {
        $data = DB::table($this->table)->get();

        return $data;
    }
}
