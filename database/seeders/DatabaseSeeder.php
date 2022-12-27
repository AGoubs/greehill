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
  }
}
