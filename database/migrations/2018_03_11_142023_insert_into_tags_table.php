<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIntoTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags', function (Blueprint $table) {
            DB::table('tags')->delete();

            DB::table('tags')->insert(array(
                array(
                'name' => 'php',
                ),
                array(
                'name' => 'laravel',
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
        Schema::dropIfExists('tags', function (Blueprint $table) {
            //
        });
    }
}
