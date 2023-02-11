<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string("seller_name", 100);
            $table->string("buyer_name", 100);
            $table->string("supplier", 100);
            $table->string("factory", 100);
            $table->string("trademark", 100);
            $table->date("date");
            $table->text("location");
            $table->string("type", 50);
            $table->string("unit_one")->nullable();
            $table->string("pieces_one")->nullable();
            $table->string("sum_one")->nullable();
            $table->string("unit_two")->nullable();
            $table->string("pieces_two")->nullable();
            $table->string("sum_two")->nullable();
            $table->string("unit_three")->nullable();
            $table->string("pieces_three")->nullable();
            $table->string("sum_three")->nullable();
            $table->string("total", 100);
            $table->string("pieces", 50);
            $table->string("qr_code");
            $table->string("invoice_num", 50);
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");
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
        Schema::dropIfExists('invoices');
    }
};
