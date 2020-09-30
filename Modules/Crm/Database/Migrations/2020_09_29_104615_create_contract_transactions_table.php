<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('contract_id');
            $table->boolean('type_id'); // 1 là chuyển khoản, 0 là tiền mặt
            $table->integer('author');
            $table->integer('status');
            $table->boolean('is_checked')->default(0);
            $table->integer('checker_id')->nullable();
            $table->date('checker_time')->nullable();
            $table->string('description');
            $table->boolean('is_deleted')->default(0);
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
        Schema::dropIfExists('contract_transactions');
    }
}
