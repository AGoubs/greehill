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
  ];

  public static function getAllQuestions()
  {
    return Question::orderBy('question', 'asc')->get();
  }
}
