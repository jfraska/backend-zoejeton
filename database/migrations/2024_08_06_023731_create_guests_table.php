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
            $table->integer('category')->nullable();
            $table->integer('status')->default(0);
            $table->unsignedBigInteger('groupId');

            $table->json('sosmed')->nullable();
            $table->json('attended')->nullable();
            $table->timestamps();

            $table->foreignUuid('invitationId')->index()->references('id')->on('invitations')->onDelete('cascade');
            $table->foreign('groupId')->references('id')->on('groups')->onDelete('cascade');

            $table->index('groupId');
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
