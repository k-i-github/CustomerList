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
            $table->string('list_heds_id')->nullable();
            $table->string('date'); //日付
            $table->string('classification')->nullable(); //分類
            $table->string('time'); //時間
            $table->string('visitor'); //来店者
            $table->string('clientlist_1')->nullable(); //営業先
            $table->string('clientlist_2')->nullable();
            $table->string('clientlist_3')->nullable();
            $table->string('clientlist_4')->nullable();
            $table->string('clientlist_5')->nullable();
            $table->string('customer_name_1')->nullable(); //顧客名
            $table->string('customer_name_2')->nullable();
            $table->string('customer_name_3')->nullable();
            $table->string('customer_name_4')->nullable();
            $table->string('customer_name_5')->nullable();
            $table->string('men')->nullable(); //男
            $table->string('women')->nullable(); //女
            $table->string('table_number')->nullable(); //卓番
            $table->string('amount')->nullable(); //金額
            $table->string('service_1')->nullable(); //接客
            $table->string('service_2')->nullable();
            $table->string('service_3')->nullable();
            $table->string('service_4')->nullable();
            $table->string('service_5')->nullable();
            $table->string('staff_1')->nullable(); //担当
            $table->string('staff_2')->nullable();
            $table->string('staff_3')->nullable();
            $table->string('staff_4')->nullable();
            $table->string('staff_5')->nullable();
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
