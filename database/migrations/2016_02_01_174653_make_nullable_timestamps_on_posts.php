<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeNullableTimestampsOnPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('posts', function ($table) {
             $table->dropColumn(['created_at', 'updated_at']);
         });

         Schema::table('posts', function ($table) {
             $table->nullableTimestamps();
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
             $table->dropColumn(['created_at', 'updated_at']);
         });

         Schema::table('posts', function ($table) {
             $table->timestamps();
         });
     }
 }
