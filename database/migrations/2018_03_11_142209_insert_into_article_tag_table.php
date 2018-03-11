<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIntoArticleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article_tag', function (Blueprint $table) {
            DB::table('article_tag')->delete();

            DB::table('article_tag')->insert(array(
                array(
                'article_id' => '1',
                'tag_id' => '1',
                ),
                array(
                'article_id' => '2',
                'tag_id' => '2',
                )
            ));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tag', function (Blueprint $table) {
            //
        });
    }
}
