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
        Schema::create('instances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('subscription_id')->constrained()->onDelete('cascade');
            $table->string('reference')->unique();
            $table->string('name')->unique();
            $table->string('entreprise')->nullable();
            $table->string('url')->unique();
            $table->enum('status', ['active', 'expired'])->default('active');
            $table->string('auth_token', 64)->nullable();
            $table->timestamp('token_expires_at')->nullable();
            $table->string('dolibarr_username');
            $table->string('dolibarr_password');
            $table->timestamps();
            $table->softDeletes();

            // Index pour améliorer les performances des requêtes fréquentes
            $table->index('status');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instances');
    }
};
