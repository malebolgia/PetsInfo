<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetsTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {

            /**
             * Table: pets
             */
            Schema::create('pets', function($table) {
                $table->increments('id');
                $table->string('name_of_pet', )->nullable();
                    $table->bigInteger('user_id')->nullable();
                    $table->bigInteger('perfecture_id')->nullable();
                    $table->bigInteger('reward_id')->nullable();
                    $table->dateTime('lost_date')->nullable();
                    $table->text('color_of_pet')->nullable();
                    $table->smallInteger('age_of_pet')->nullable();
                    $table->text('character')->nullable();
                    $table->text('characteristics')->nullable();
                    $table->tinyInteger('status')->nullable();
                    $table->float('map_lat')->nullable();
                    $table->float('map_lang')->nullable();
                    $table->decimal('other_amount', 8,2)->nullable();
    
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
                Schema::drop('pets');
         }

}