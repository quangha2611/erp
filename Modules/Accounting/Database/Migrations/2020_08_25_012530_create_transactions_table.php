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
            $table->integer('expenseCategoryId');
            $table->string('description')->nullable();
            $table->integer('type');
            $table->string('status')->default(1);
            $table->integer('author');
            $table->boolean('isDeleted')->default(0);;
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
