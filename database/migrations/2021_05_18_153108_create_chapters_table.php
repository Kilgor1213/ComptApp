<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('text');

            // Chapters can be liked
            $table->unsignedBigInteger('chapter_id');
            $table->foreign('chapter_id')
                ->references('id')
                ->on('likes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            // Exerices can be liked
            $table->unsignedBigInteger('exercice_id');
            $table->foreign('exercice_id')
                ->references('id')
                ->on('exercices')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->text('text');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapters');
    }
}
