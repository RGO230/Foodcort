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
        Schema::create('shawarmas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('descr');
            $table->integer('assortment');
            $table->integer ('price_from');
            $table->integer('price_to');
            $table->integer('overall_rating');
            $table->string('address');
            $table->string('img');
            $table->boolean('delivery');
            $table->integer('service_quality');
            $table->boolean('foodcort');
            $table->double('longitude');
            $table->double('latitude');
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shawarmas');
    }
};
