<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class weeklymatch extends Model
{
    protected $fillable =['game_id','galleryId',' m_title','m_type','rules','time_zone','prize','result','video','team_type','member_type','rating','categories','tagline','entry_fee','m_day','post_active'];

    protected $table = 'weeklymatches';
    protected $primaryKey='id';
    protected $casts =["id" => "INT"];
}
