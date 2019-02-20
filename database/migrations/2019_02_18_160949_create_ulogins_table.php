<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUloginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulogins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
                  $table->string('email')->unique();
                     $table->string('dob');
                        $table->string('mobile');
                           $table->string('password');
                           $table->string('userImage');
                            $table->string('city');
                             $table->string('country');
                              $table->string('aboutMe');
                             $table->string('status');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ulogins');
    }
}
