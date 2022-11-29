<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->integer('id_number')->unique();
            $table->string('statues');
            $table->string('mobile')->unique();
            $table->string('company_name');
            $table->string('location');
            $table->string('iban');
            $table->string('vat_number');
            $table->string('bobox');
            $table->text('note');
            $table->string('web_site')->nullable();
            $table->string('total_expectation')->nullable();
            $table->string('total_sales')->nullable();
            $table->string('total_refund')->nullable();
            $table->string('created_by')->nullable();

            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
