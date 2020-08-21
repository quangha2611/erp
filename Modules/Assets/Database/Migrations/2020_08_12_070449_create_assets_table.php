<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->integer('companyId');
            $table->integer('categoryId');
            $table->string('name');
            $table->char('code')->nullable()->default(null);
            $table->integer('originalValue');
            $table->integer('quantity');
            $table->integer('deviceStatus');
            $table->date('boughtDate');
            $table->date('manufactureDate')->nullable()->default(null);
            $table->date('expiredDate')->nullable()->default(null);
            $table->integer('warrantyMonths')->nullable()->default(null);
            $table->integer('author');
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
        Schema::dropIfExists('assets');
    }
}
