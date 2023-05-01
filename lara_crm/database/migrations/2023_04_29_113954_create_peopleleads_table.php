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
        Schema::create('peopleleads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('group');
            $table->string('open_deal');
            $table->string('close_deal');
            $table->string('status');
            $table->string('email');
            $table->string('number');
            $table->text('address');
            $table->string('lead_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peopleleads');
    }
};
