<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeNullablePusblishedAtInPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('posts', function ($table) {
             $table->datetime('published_at')->nullable()->change();
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('posts', function ($table) {
             $table->datetime('published_at')->change();
         });
     }
}
