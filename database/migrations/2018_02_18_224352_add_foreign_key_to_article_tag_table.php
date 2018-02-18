<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToArticleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article_tag', function (Blueprint $table) {
          $table->integer('article_id')->unsigned()->index();
          $table->foreign('article_id')->references('id')->on('articles');

          $table->integer('tag_id')->unsigned()->index();
          $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_tag', function (Blueprint $table) {
          $table->dropIfExists('article_id');
          $table->dropIfExists('tag_id');
        });
    }
}
