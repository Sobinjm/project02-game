<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class splmatch extends Model
{
    protected $fillable =['game_id','galleryId',' m_title','m_type','rules','time_zone','prize','result','video','team_type','member_type','rating','categories','tagline','entry_fee','m_date','post_active'];

    protected $table = 'splmatch';
    protected $primaryKey='id';
    protected $casts =["id" => "INT"];
}