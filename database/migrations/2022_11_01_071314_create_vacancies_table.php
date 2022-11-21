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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('photo');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->date('date');
            $table->text('duty_uz');
            $table->text('duty_ru');
            $table->text('duty_en');
            $table->text('skills_uz')->nullable();
            $table->text('skills_ru')->nullable();
            $table->text('skills_en')->nullable();
            $table->text('advantage_uz')->nullable();
            $table->text('advantage_ru')->nullable();
            $table->text('advantage_en')->nullable();
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
        Schema::dropIfExists('vacancies');
    }
};
