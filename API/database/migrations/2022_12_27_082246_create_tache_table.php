<?php

use App\Models\Tache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tache', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("preparation_tache_id");
            $table->unsignedInteger("Apprenant_id");

            $table->foreign('preparation_tache_id')->references('id')->on('preparation_tache')->onDelete('cascade');
            $table->foreignId('apprenant_P_brief_id')->constrained('brief')->onDelete('cascade');
            $table->foreign('Apprenant_id')->references('id')->on('apprenant')->onDelete('cascade');

            $table->unsignedInteger('preparation_brief_id');
            $table->foreign('preparation_brief_id')->references('id')->on('preparation_brief')->onDelete('cascade');

            // $table->enum('Etat', ['Terminer', 'En cours','En pouse'])->nullable()->default('En pouse');
            $table->timestamp("date_debut")->nullable();
            $table->enum(column:"Etat",allowed:Tache::ETAT)->default('En pouse');

            $table->timestamp("date_fin")->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tache');
    }
};
