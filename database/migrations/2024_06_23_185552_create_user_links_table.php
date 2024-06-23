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
        Schema::create('user_links', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id','id')->references('id')->on('user');
            $table->string('code')->unique(); // unique identifier
            $table->string('url'); // original url
            $table->string('qrcode_location')->nullable();
            $table->string('password')->nullable();
            $table->integer('clicks')->default(0);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_links');
    }
};
