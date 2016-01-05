<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetimagesTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {

            /**
             * Table: petimages
             */
            Schema::create('petimages', function($table) {
                $table->increments('id');
                $table->bigInteger('pet_id')->nullable();
                    $table->string('title', 255)->nullable();
                    $table->text('image_path')->nullable();
                    $table->boolean('mainpic')->nullable();
    
                $table->string('slug', 100)->nullable();
                $table->integer('user_id')->nullable();
                $table->string('upload_folder', 100)->nullable();
                $table->softDeletes();
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
                Schema::drop('petimages');
         }

}