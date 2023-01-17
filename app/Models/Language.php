<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'name',
    'english_name',
    'abbreviation',
    'flag',
  ];

  public static function getAllLanguages()
  {
    return Language::orderBy('name', 'asc')->get();
  }

  public static function getArrayLanguages($array)
  {
    return Language::whereIn('id', $array)->get();
  }
  public static function deteleLanguage($language_id)
  {
    return Language::where('id', $language_id)->delete();
  }
}
