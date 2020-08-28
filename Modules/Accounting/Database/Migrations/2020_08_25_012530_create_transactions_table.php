<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('companyId');
            $table->integer('departmentId');
            $table->date('applyDate');
            $table->integer('accountId');
            $table->integer('amount');
            $table->string('link')->nullable();
            $table->string('description')->nullable();
            $table->integer('type');
            $table->string('status');
            $table->integer('author');
            $table->boolean('isDeleted');
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
        Schema::dropIfExists('transactions');
    }
}
