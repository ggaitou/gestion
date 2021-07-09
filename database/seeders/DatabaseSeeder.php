<?php

//use App\Models\Model;
namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
		
		//CREATION DE 30 ETUDIANTS ALEATOIR A PARTIR  DU FACTORY
		
        \App\Models\Etudiant::factory(30)->create();
		
		//FIN CREATION DE 30 ETUDIANTS ALEATOIR A PARTIR  DU FACTORY
		
		//CREATION DES CLASSES A PARTIR De ClassesTableSeeder
		
       // $this->call(ClassesTableSeeder::class);
		//FIN CREATION DES CLASSES A PARTIR De ClassesTableSeeder
    }
}
