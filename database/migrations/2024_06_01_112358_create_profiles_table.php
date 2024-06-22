<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 125);
            $table->string('middle_name', 125);
            $table->string('last_name', 125);
            $table->string('suffix', 125)->nullable();
            $table->string('birthdate', 125);
            $table->string('birthplace', 125);
            $table->string('registry_no', 125);
            $table->string('page_no', 125);
            $table->string('book', 125);
            $table->string('mother_name', 125);
            $table->string('father_name', 125);
            $table->string('is_married', 10);
            $table->string('m_date', 255)->nullable();
            $table->string('m_place', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
