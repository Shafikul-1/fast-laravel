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
        Schema::create('city', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city');
            // $table->foreign('city')
            // ->references('id')
            // ->on('users')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');

            // same work

            // 👉users_id = (users = users table) & (id = users table id)
            // $table->foreignId('users_id')->constrained();
            $table->foreignId('users_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();


            $table->date('dates');
            $table->string('book', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
};
