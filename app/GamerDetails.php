<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamerDetails extends Model
{
    protected $fillable =['game_id','user_id','username','gamer_id'];

    protected $table = 'gamer_details';
    protected $primaryKey='id';
    protected $casts =["id" => "INT"];
}

