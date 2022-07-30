<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('name', 255);
            $table->string('father', 255);
            $table->string('mother', 255);
            $table->string('guardian', 255)->nullable();
            $table->integer('nisn');
            $table->string('birth_location', 50);
            $table->date('birthday');
            $table->string('gender', 25);
            $table->string('religion', 25);
            $table->string('status');
            $table->integer('child_order');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3')->nullable();
            $table->integer('telephone_1');
            $table->integer('telephone_2');
            $table->integer('telephone_3')->nullable();
            $table->string('original_school');
            $table->string('father_occupation');
            $table->string('mother_occupation');
            $table->string('guardian_occupation')->nullable();
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
        Schema::dropIfExists('students');
    }
}
