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
        Schema::table('questions', function (Blueprint $table)
        {
            $table->foreignId('category_id')->constrained();
            # code...
        });
        //
        Schema::table('historyplays', function (Blueprint $table)
        {
            $table->foreignId('user_id')->constrained();
            # code...
        });
        //
        Schema::table('transactionhistories', function (Blueprint $table)
        {
            $table->foreignId('user_id')->constrained();
            # code...
        });
        //
        Schema::table('transactionhistories', function (Blueprint $table)
        {
            $table->foreignId('i_dtransactions_id')->constrained();
            # code...
        });
        //
        Schema::table('transactionhistories', function (Blueprint $table)
        {
            $table->foreignId('creditpackages_id')->constrained();
            # code...
        });
        //
        Schema::table('historicaldetails', function (Blueprint $table)
        {
            $table->foreignId('user_id')->constrained();
            # code...
        });
        //
        //
        Schema::table('historicaldetails', function (Blueprint $table)
        {
            $table->foreignId('historyplays_id')->constrained();
            # code...
        });
        //
        Schema::table('historicaldetails', function (Blueprint $table)
        {
            $table->foreignId('questions_id')->constrained();
            # code...
        });
        //
        Schema::table('i_dtransactions', function (Blueprint $table)
        {
            $table->foreignId('creditpackages_id')->constrained();
            # code...
        });
        



        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
