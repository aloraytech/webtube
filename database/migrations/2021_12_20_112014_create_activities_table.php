<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('in_time');
            $table->string('out_time');
            $table->string('subject')->default('new activity');
            $table->string('url')->nullable();


            $table->boolean('like')->default(false);
            $table->boolean('favourite')->default(false);
            $table->boolean('watchlist')->default(false);
            $table->json('detail')->nullable();

            $table->foreignId('movies_id')->nullable()->constrained('movies')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('shows_id')->nullable()->constrained('shows')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('seasons_id')->nullable()->constrained('seasons')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('episodes_id')->nullable()->constrained('episodes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('posts_id')->nullable()->constrained('posts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pages_id')->nullable()->constrained('pages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('members_id')->nullable()->constrained('members')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('adverts_id')->nullable()->constrained('adverts')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('activities');
    }
}