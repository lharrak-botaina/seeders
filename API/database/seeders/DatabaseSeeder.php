<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\AnneFormation;
use App\Models\Apprenant;
use App\Models\Brief;
use App\Models\Formateur;
use App\Models\Groupes;
use App\Models\GroupesApprenant;
use App\Models\GroupesPreparationBrief;
use App\Models\PreparationBrief;
use App\Models\PreparationTache;
use App\Models\Tache;
use Database\Factories\AnneFormationFactory;
use Database\Factories\ApprenantFactory;
use Database\Factories\BriefFactory;
use Database\Factories\TacheFactory;
use Database\Factories\FormateurFactory;
use Database\Factories\GroupesFactory;
use Database\Factories\GroupesApprenantFactory;
use Database\Factories\GroupesPreparationBriefFactory;
use Database\Factories\PreparationBriefFactory;
use Database\Factories\PreparationTacheFactory;




class DatabaseSeeder extends Seeder
{
  public function run (){
    if(Formateur::count() == 0){

      Formateur::insert(array (
        0=>array(
        "Nom_formateur"=>'Essarraj',
        "Prenom_formateur"=>'Fouad',
        "Email_formateur"=>'fouad@gmail.com',
        "Phone"=>'07653223456',
        "Adress"=>'Tanger',
        "CIN"=>'KB234567890',
      ),
        1=>array(   "Nom_formateur"=>'abdletif',
        "Prenom_formateur"=>'Soklabi',
        "Email_formateur"=>'soklabi@gmail.com',
        "Phone"=>'07653223456',
        "Adress"=>'Tanger',
        "CIN"=>'KB234567890',
    ),
    2=>array(   "Nom_formateur"=>'prof1',
    "Prenom_formateur"=>'Soklabi',
    "Email_formateur"=>'soklabi@gmail.com',
    "Phone"=>'07653223456',
    "Adress"=>'Tanger',
    "CIN"=>'KB234567890',
),


      ));
    }
    AnneFormation::insert(array(
        0=>array(
            'Annee_scolaire'=>'2022-2023'
        ),
        1=>array(
            'Annee_scolaire'=>'2023-2024'
        ),
    ));
    Groupes::insert(array(
        0=>array(
            "Nom_groupe"=>'codecampers',
            "Annee_formation_id"=> AnneFormation::first()->id,
            'Formateur_id'=> Formateur::first()->id,
            "Logo"=>'gdvshbjkxwn',
        ),
        1=>array(
            "Nom_groupe"=>'cyberGang',
            "Annee_formation_id"=> AnneFormation::first()->id,
            'Formateur_id'=> Formateur::first()->id,
            "Logo"=>'gdvshbjkxwn',
        ),
        1=>array(
            "Nom_groupe"=>'group 3',
            "Annee_formation_id"=> AnneFormation::first()->id,
            'Formateur_id'=> Formateur::first()->id,
            "Logo"=>'gdvshbjkxwn',
        )
    ));

    // Formateur::factory(4)->create();
    // AnneFormation::factory(2)->create();
    // Groupes::factory(2)->create();
    Apprenant::factory(10)->create();
    GroupesApprenant::factory(10)->create();
    PreparationBrief::factory(10)->create();
    PreparationTache::factory(10)->create();
    Brief::factory(10)->create();
    Tache::factory(10)->create();
    GroupesPreparationBrief::factory(10)->create();

  }
}
