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
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->text('about',5000);
            $table->text('purchase',5000);
            $table->text('privacy',5000);
            $table->text('refund',5000);
            $table->string('address');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('android_app');
            $table->string('ios_app');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_infos');
    }
};
