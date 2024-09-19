<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('police', function (Blueprint $table) {
            $table->id();
            $table->string('client_num');
            $table->string('police_number');
            $table->string('raison_sociale');
            $table->string('addresse');
            $table->string('telephone1');
            $table->string('telephone2')->nullable();
            $table->string('fax')->nullable();
            $table->string('telex')->nullable();
            $table->string('code_activite')->nullable();
            $table->string('dirigeant')->nullable();
            $table->string('fonction')->nullable();
            $table->string('statut')->nullable();
            $table->date('date_souscription')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('file_path')->nullable(); // To store the uploaded file path
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('police');
    }
};
