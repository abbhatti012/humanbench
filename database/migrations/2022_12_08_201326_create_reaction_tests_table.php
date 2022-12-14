<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactionTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reaction_tests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(0);
            $table->integer('last_score')->default(0);
            $table->integer('score1')->default(0);
            $table->integer('score2')->default(0);
            $table->integer('score3')->default(0);
            $table->integer('score4')->default(0);
            $table->integer('score5')->default(0);
            $table->integer('avg_score')->default(0);
            $table->string('ip')->nullable();
            $table->string('host')->nullable();
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
        Schema::dropIfExists('reaction_tests');
    }
}
