<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIntoProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            DB::table('profiles')->delete();

            DB::table('profiles')->insert(array(
                array(
                  'first_name' => 'Ali',
                  'last_name' => 'Admin',
                  'birth_date' => '1991-09-02',
                  'location' => 'Paris, France',
                  'description' => 'I\'m an admin!',
                  'user_id' => 1
                ),
                array(
                  'first_name' => 'Ali',
                  'last_name' => 'Hasan',
                  'birth_date' => '1991-09-02',
                  'location' => 'Paris',
                  'description' => 'I\'m a member!',
                  'user_id' => 2
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
        Schema::dropIfExists('profiles', function (Blueprint $table) {
            //
        });
    }
}
