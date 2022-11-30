<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicaldetails', function (Blueprint $table) {
            $table->id("IDhistory")->autoIncrement();
            $table->integer("IDuser");
            $table->integer("IDquestion");
            $table->string("answer");
            $table->string("rightanswer");
            $table->softDeletes();
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
        Schema::dropIfExists('historicaldetails');
    }
};