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
            $table->string('reference')->unique();
            $table->string('name_instance')->unique();
            $table->string('url')->unique();
            $table->enum('status', ['active', 'expired'])->default('active'); // Statut de l'instance
            $table->enum('type', ['free', 'paid'])->default('free'); // Type d'abonnement
            $table->date('expiration_date');
            $table->string('auth_token')->nullable();
            $table->string('dolibarr_username');
            $table->string('dolibarr_password');
            $table->timestamps();
            $table->softDeletes();
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
