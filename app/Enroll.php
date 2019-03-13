<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $fillable =['user_id','g_id','team_id','match_id','match_date','payment_status','payment_received','match_type','order_id','transaction_id'];

    protected $table = 'enrolment';
    protected $primaryKey='id';
    protected $casts =["id" => "INT"];
}
