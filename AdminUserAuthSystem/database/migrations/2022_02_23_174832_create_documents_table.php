<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('applications_id');
            $table->string('firmaYetkiliKimlik',100)->nullable();
            $table->string('digerYetkiliKimlik',100)->nullable();
            $table->string('adresBelgesi',100)->nullable();
            $table->string('imzaSirküleri',100)->nullable();
            $table->string('vergiLevhasi',100)->nullable();
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
        Schema::dropIfExists('documents');
    }
}
