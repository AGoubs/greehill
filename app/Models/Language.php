<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
  use HasFactory;

  public static function getAllLanguages()
  {
    return Language::orderBy('name', 'asc')->get();
  }
}