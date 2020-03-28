<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('field_1');
            $table->string('field_1_comment');
            $table->integer('field_2');
            $table->string('field_2_comment');
            $table->integer('field_3');
            $table->string('field_3_comment');
            $table->integer('field_4');
            $table->string('field_4_comment');
            $table->integer('field_5');
            $table->string('field_5_comment');
            $table->integer('field_6');
            $table->string('field_6_comment');
            $table->integer('field_7');
            $table->string('field_7_comment');
            $table->integer('field_8');
            $table->string('field_8_comment');
            $table->integer('field_9');
            $table->string('field_9_comment');
            $table->integer('field_10');
            $table->string('field_10_comment');
            $table->integer('field_11');
            $table->string('field_11_comment');
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
        Schema::dropIfExists('tax_forms');
    }
}
