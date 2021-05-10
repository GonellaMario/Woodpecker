<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->datetime('start_time')->nullable();
            $table->datetime('end_date')->nullable();
            $table->string('recurrence')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
