<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'question',
    'answer',
    'language_id',
    'question_id',
    'translated',
  ];

  public static function getAllQuestions()
  {
    return Question::orderBy('question_id', 'asc')->get();
  }

  public static function deleteLanguagesQuestionsById($id)
  {
    return Question::where('question_id', $id)->delete();
  }
}
