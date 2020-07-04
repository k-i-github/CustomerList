<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListDtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_dtls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('list_heds_id')->nullable();
            $table->string('date'); //日付
            $table->string('classification')->nullable(); //分類
            $table->string('time')->nullable(); //時間
            $table->string('visitor'); //来店者
            $table->string('clientlist')->nullable(); //営業先
            $table->string('customer_name')->nullable(); //顧客名
            $table->string('men')->nullable(); //男
            $table->string('women')->nullable(); //女
            $table->string('table_number')->nullable(); //卓番
            $table->string('amount')->nullable(); //金額
            $table->string('service')->nullable(); //接客
            $table->string('staff')->nullable(); //担当
            $table->string('image_path')->nullable();
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
        Schema::dropIfExists('list_dtls');
    }
}
