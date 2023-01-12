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
        Schema::create('_rezervasyon', function (Blueprint $table) {
            $table->id();
            $table->string('arababaslangıc')->nullable();
            $table->string('arababitis')->nullable();
            $table->date('baslangıctarih')->nullable();
            $table->date('bitistarih')->nullable();
            $table->string('arabamodel')->nullable();
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
        Schema::dropIfExists('_rezervasyon');
    }
};
