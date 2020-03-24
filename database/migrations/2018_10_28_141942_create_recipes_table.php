<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->string('id');
            $table->primary('id');
            $table->string('name');
            $table->text('notes')->nullable();
            $table->string('origin')->nullable();
            //$table->enum('brew_method',['all_grain','biab','extract','partial_mash'])->default('all_grain');
            $table->integer('batch_size')->nullable();
            $table->enum('batch_size_unit',['l','us_gal','imp_gal'])->default('l');
            $table->integer('efficiency_percentage')->nullable();
            $table->float('original_gravity', 8, 3)->nullable();
            $table->enum('original_gravity_unit',['og','fg','p','b'])->default('p');
            // $table->float('final_gravity');
            $table->integer('ibu')->nullable();
            $table->integer('color')->nullable();
            $table->enum('color_unit',['ebc','srm','L'])->default('ebc');
            $table->float('alcohol_by_volume_percentage')->nullable();
            $table->integer('boil_time')->nullable();
            $table->enum('boil_time_unit',['min','h','d','week'])->default('min');
            $table->integer('carbonation')->nullable();
            $table->enum('carbonation_unit',['g/l'])->default('g/l');
            // $table->string('style_id');
            // $table->string('equipment_id');
            // $table->string('brewer_id');
            // $table->string('hop_id');
            // $table->string('fermentable_id');
            // $table->string('misc_id');
            // $table->string('yeast_id');
            // $table->string('mash_id');
            // $table->string('taste_notes');
            // $table->string('taste_rating');
            // $table->string('hop_id');
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
        Schema::dropIfExists('recipes');
    }
}
