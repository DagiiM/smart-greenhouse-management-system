<?php

use App\Models\User;
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
          $table->bigIncrements('id');
          $table->string('firstname');
          $table->string('lastname');
          $table->string('mobile')->unique();
          $table->string('gender');
          $table->string('picture');
          $table->string('cover_image');
          $table->string('email')->unique();
          $table->string('bio');
          $table->string('address')->nullable();
          $table->string('city')->nullable();
          $table->string('country')->nullable();
          $table->string('postal_code')->nullable();
          $table->string('verified')->default(User::UNVERIFIED_USER);
          $table->string('verification_token')->nullable();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->rememberToken();
          $table->timestamps();
          $table->softDeletes();
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
