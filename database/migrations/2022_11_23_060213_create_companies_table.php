<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName')->default('Laravel Pos');
            $table->string('companyAddress')->default('Laravel Pos Address');
            $table->string('companyPhone')->default('+94 76 160 91 25');
            $table->string('companyEmail')->default('laravelpos@gmail.com');
            $table->string('companyFax')->default('+94 76 160 91 25');
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
        Schema::dropIfExists('companies');
    }
}