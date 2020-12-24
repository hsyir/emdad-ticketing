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
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('title')->nullable();

            //ldap
            $table->string('username')->unique();
            $table->string('department')->nullable();
            $table->string('company')->nullable();
            $table->string('manager')->nullable();
            $table->string('dn')->nullable();
            $table->string('objectguid')->nullable();
            $table->text('member_of')->nullable();

            //simotel
            $table->string('simotel_number')->nullable();
            $table->string('simotel_password')->nullable();
            $table->boolean("simotel_paused")->default(true);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
