<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');
            $table->integer('level_id')->default(1);
            $table->string('name');
            $table->string('phone')->unique();
            $table->integer('major_id');
            $table->string('email')->unique();
            $table->string('city_id');
            $table->integer('district_id')->nullable(); 
            $table->string('source_id');
            $table->string('description')->nullable();
            // for company
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->string('identification');
            $table->string('identification_place')->nullable();
            $table->string('identification_date')->nullable();
            $table->string('taxcode')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();

            $table->boolean('is_account')->default(0);
            $table->integer('customer_status')->nullable();
            $table->integer('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
