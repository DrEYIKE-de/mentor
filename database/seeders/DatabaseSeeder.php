<?php

namespace Database\Seeders;

use App\Models\Codable;
use App\Models\Code;
use App\Models\User;
use App\Models\Cours;
use App\Models\Ecole;
use App\Models\Niveau;
use App\Models\Faculte;
use App\Models\Filiere;
use App\Models\Matiere;
use App\Models\Professeur;
use App\Models\Relation;
use App\Models\Td;
use App\Models\Universite;
use Database\Factories\MatiereFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        User::factory(10)->create();
        Universite::factory(10)->create();
        Faculte::factory(10)->create();
        Ecole::factory(10)->create();
        $a=0;
        while ($a <= 10) {

            Filiere::factory()->state(new Sequence([
                'filiereable_id'=>Faculte::all()->random()->id,
                'filiereable_type'=>'App\Models\Faculte'
                ]))->create();

            Filiere::factory()->create([
                    'filiereable_id'=>Ecole::all()->random()->id,
                    'filiereable_type'=>'App\Models\Ecole'
                    ]);

                $a+=1;
        }
        Niveau::factory(10)->create();
        Matiere::factory(10)->create();
        Cours::factory(10)->create();
        Professeur::factory(3)->create();
        Td::factory(10)->create();
        Code::factory(10)->create();
       
    }
}
