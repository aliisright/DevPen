<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToFollowerFollowedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('follower_followed', function (Blueprint $table) {
          $table->integer('follower_id')->unsigned()->index();
          $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');

          $table->integer('followed_id')->unsigned()->index();
          $table->foreign('followed_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('follower_followed', function (Blueprint $table) {
          $table->dropIfExists('follower_id');
          $table->dropIfExists('followed_id');
        });
    }
}
