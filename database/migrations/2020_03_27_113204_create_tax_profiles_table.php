<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('nid')->nullable();
            $table->string('utin')->nullable();
            $table->string('tin');
            $table->string('circle');
            $table->string('tax_zone');
            $table->string('assessment_year');
            $table->string('residential_status');
            $table->string('status');
            $table->string('name_of_business');
            $table->string('wife_husband_name')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('date_of_birth');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('phone_business');
            $table->string('phone_residential');
            $table->string('vat_registration_number')->nullable();
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
        Schema::dropIfExists('tax_profiles');
    }
}
