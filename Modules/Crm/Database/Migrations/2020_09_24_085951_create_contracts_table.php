<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('company_id');
            $table->integer('major_id')->nullable();
            $table->date('sign_date'); // Ngày ký
            $table->date('start_date'); // Ngày bắt đầu
            $table->date('end_date')->nullable(); // Ngày kết thúc
            $table->date('expired_date')->nullable(); // Ngày kết thúc
            $table->integer('contract_type'); // Loại hợp đồng
            $table->integer('sign_type'); // Hình thức ký
            $table->string('description')->nullable();
            $table->integer('total_value');
            $table->integer('author');
            $table->boolean('is_checked')->default(0); // Duyệt chưa
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
        Schema::dropIfExists('contracts');
    }
}
