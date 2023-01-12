<?php

namespace Database\Factories;

use App\Models\AnneFormation;
use App\Models\Formateur;
use App\Models\Groupes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\groupes>
 */
class GroupesFactory extends Factory
{
    protected $model=Groupes::class;
    public function definition()
    {



        return [
            "Nom_groupe"=>'codecampers',
            "Annee_formation_id"=> AnneFormation::inRandomOrder()->first()->id,
            'Formateur_id'=> Formateur::inRandomOrder()->first()->id,
            "Logo"=>'gdvshbjkxwn',
        ];
    }
}
