<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::factory()->create([
      'name' => 'Arnaud Goubier',
      'email' => 'arnaud@goubier.fr',
      'password' => Hash::make('Test1234')
    ]);
    DB::table('languages')->insert([
      'name' => "Français",
      'english_name' => "French",
      'abbreviation' => "fr",
    ]);
    DB::table('languages')->insert([
      'name' => "English",
      'english_name' => "English",
      'abbreviation' => "us",
    ]);
    DB::table('languages')->insert([
      'name' => "Magyar",
      'english_name' => "Hungary",
      'abbreviation' => "hu",
    ]);
    DB::table('languages')->insert([
      'name' => "Deutsch",
      'english_name' => "German",
      'abbreviation' => "de",
    ]);
    DB::table('languages')->insert([
      'name' => "Italiano",
      'english_name' => "Italian",
      'abbreviation' => "it",
    ]);
    DB::table('languages')->insert([
      'name' => "Español",
      'english_name' => "Spanish",
      'abbreviation' => "es",
    ]);
    // DB::table('questions')->insert([
    //   'question_id' => 1,
    //   'language_id' => 1,
    //   'question' => "Comment est constituée cette entreprise (nombre de personnes, commercial, développeur, technicien ….) ?",
    //   'answer' => "Environ 60 personnes dont 50 au siège de l'entreprise (développeurs, administration générale, direction monde) à Budapest. 5 filiales ouvertes dans le monde : Singapour, Berlin, Paris, San Francisco et Budapest.
    //   Nous installons dans chaque pays une équipe d'employés (tels que responsable de la réussite client, chef de projet, responsable du développement commercial) pour la routine de travail quotidienne, afin que les clients aient un contact court et direct dans leur pays.",
    // ]);
    // DB::table('questions')->insert([
    //   'question_id' => 1,
    //   'language_id' => 2,
    //   'question' => "How is this company constituted (number of people, sales, developer, technician ....) ?",
    //   'answer' => "Approximately 60 people, including 50 at the company's headquarters (developers, general administration, world management) in Budapest. 5 subsidiaries opened around the world: Singapore, Berlin, Paris, San Francisco and Budapest. 
    //   We install in every country a team of employees (like customer success manager, project manager, business development manager) for the daily job routine, so that clients have a short and direct contact in their country.",
    // ]);
  }
}
