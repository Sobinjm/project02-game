<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulogin extends Model
{
    protected $fillable =['username','email','dob','mobile','password','userImage','city','country','aboutMe','status'];

    protected $table = 'ulogins';
    protected $primaryKey='id';
    protected $casts =["id" => "INT"];
}
