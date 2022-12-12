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
        Schema::create('new_promotions', function (Blueprint $table) {
            $table->id();
            $table->string('type_uz')->nullable();
            $table->string('type_ru')->nullable();
            $table->string('type_en')->nullable();
            $table->date('date');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('photo_main');
            $table->text('description_uz');
            $table->text('description_ru');
            $table->text('description_en');
            $table->string('photo');
            $table->integer('year');
            $table->string('slug');
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
        Schema::dropIfExists('new_promotions');
    }
};
