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
        Schema::create('guests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('category')->nullable();
            $table->integer('status')->default(0);
            $table->json('sosmed')->nullable();
            $table->json('attended')->nullable();
            $table->timestamps();

            $table->foreignUuid('invitation_id')->references('id')->on('invitations')->onDelete('cascade');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
