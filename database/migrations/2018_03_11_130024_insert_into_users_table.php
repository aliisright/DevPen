<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            DB::table('users')->delete();

            DB::table('users')->insert(array(
                array(
                'nickname' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('123456'),
                'role_id' => 1,
                ),
                array(
                'nickname' => 'aliisright',
                'email' => 'aliisright@mail.com',
                'password' => bcrypt('123456'),
                'role_id' => 2,
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
        Schema::dropIfExists('users', function (Blueprint $table) {
            //
        });
    }
}
