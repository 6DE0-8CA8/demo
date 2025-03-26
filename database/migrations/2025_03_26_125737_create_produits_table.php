<?php

use App\Models\fournisseur;
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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->decimal('prix');
            $table->integer('quantite_stock')->default(0);
            $table->string('code_barre')->unique()->nullable();
            $table->string('image')->nullable();
            $table->enum('statut', ['disponible', 'indisponible', 'précommande'])->default('disponible');
            $table->timestamps();
            $table->foreignid(column:'fournisseur_id')->constrained()->onDelete(action:'cascade');
            $table->foreignid(column:'cathegorie_id')->constrained()->onDelete(action:'cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
