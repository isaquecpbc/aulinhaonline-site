<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->char('name', 250);
            $table->char('course', 250);
            $table->char('phone', 250);
            $table->char('email', 250);
            $table->date('birthday');
            $table->char('rg', 250);
            $table->char('cpf', 250);
            $table->text('address');
            $table->char('neighborhood', 250);
            $table->char('state', 250);
            $table->char('responsible', 250);
            $table->boolean('accordingly');
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
        Schema::dropIfExists('enrollments');
    }
}
