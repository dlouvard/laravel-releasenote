<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleasenote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releases', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('body')->nullable();
            $table->longText('newthings')->nullable();
            $table->longText('ameliorations')->nullable();
            $table->string('version')->nullable();
            $table->longText('right')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('release_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('releases');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('release_id');
        });

    }
}
