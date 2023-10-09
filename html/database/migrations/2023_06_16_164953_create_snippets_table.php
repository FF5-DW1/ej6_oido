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
        Schema::create('snippets', function (Blueprint $table) {
            $table->id();
            $table->uuid("uuid");//unique user id
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->longText("content");
            $table->enum("status", ["published", "draft"])->default("draft");
            $table->unsignedBigInteger("likes")->default(0);
            $table->unsignedBigInteger("comments")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('snippets');
    }
};
