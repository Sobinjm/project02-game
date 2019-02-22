<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeklymatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeklymatches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('m_title');
            $table->string('m_type');
            $table->text('description');
            $table->text('rules');
            $table->string('time_zone');
            $table->text('prize');
            $table->text('result');
            $table->string('video');
            $table->string('team_type');
            $table->string('member_type');
            $table->string('rating');
            $table->string('categories');
            $table->string('tagline');
            $table->bigInteger('entry_fee');
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
        Schema::dropIfExists('weeklymatches');
    }
}
