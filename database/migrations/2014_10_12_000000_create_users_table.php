<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table -> bigIncrements('idx');
            $table -> String('name') -> comment('이름');
            $table -> String('user_id')->unique()->comment('아이디')->nullable();
            $table -> String('user_level')->comment('권한')->default('1');
            $table -> String('user_pw')->comment('비밀번호')->nullable();
            $table -> String('email')->unique()->comment('이메일');
            $table-> String('google_id')->nullable();
            $table -> String('point') -> nullable();
            $table -> rememberToken();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
