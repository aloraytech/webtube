<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('banner')->nullable();
            $table->text('desc')->nullable();
            $table->text('tags')->nullable();
            $table->integer('views')->nullable();
            $table->string('thumbnail')->nullable();
            $table->foreignId('season_id')->nullable()->constrained('seasons')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('episode_id')->constrained('episodes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('shows');
    }
}