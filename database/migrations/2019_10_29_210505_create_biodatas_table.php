<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');  
=======
            $table->bigIncrements('id');
            $table->string("nombreEstudiante");
            $table->string("direccEstudiante");
>>>>>>> 9d1e881f2143dd49cb38483c8daa09d9a5946087
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
        Schema::dropIfExists('biodatas');
    }
}
