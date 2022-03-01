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
        Schema::create('occupations', function (Blueprint $table) { //Занятия для расписания
            $table->id();
            $table->string('time_spending'); //Время проведения
            $table->unsignedBigInteger('section_id'); //Секция (бокс..)
            $table->unsignedBigInteger('trainer_id'); //Тренер
            $table->unsignedBigInteger('week_id'); //Неделя для календаря
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('time_id');
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
        Schema::dropIfExists('occupations');
    }
};
