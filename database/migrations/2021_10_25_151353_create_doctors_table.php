<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doctor_id')->unsigned()->nullable();
            $table->string('name', 100)->nullable()->default('text');
            $table->string('last_name', 100)->nullable()->default('text');
            $table->string('email', 100)->nullable()->default('text');
            $table->string('address', 100)->nullable()->default('text');
            $table->enum('specialization', ['Oftalmologo', 'Cirujano plastico', 'Endocrinologo'])->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
