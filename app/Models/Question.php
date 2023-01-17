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
    return Question::orderBy('question_id', 'asc')->join('languages', 'questions.language_id', '=', 'languages.id')->select('questions.id', 'questions.question_id', 'questions.language_id', 'questions.question', 'questions.answer', 'questions.translated', 'languages.abbreviation', 'languages.flag')->get();
  }

  public static function getLanguagesQuestionsById($id)
  {
    return Question::where('question_id', $id)->join('languages', 'questions.language_id', '=', 'languages.id')->select('questions.id', 'questions.question_id', 'questions.language_id', 'questions.question', 'questions.answer', 'questions.translated', 'languages.abbreviation', 'languages.flag')->get();
  }

  public static function getNumberQuestionId()
  {
    return Question::distinct()->get(['question_id']);
  }

  public static function getDifferentEnglishQuestion($questionsId)
  {
    return Question::whereIn('question_id', $questionsId)->where('language_id', 2)->get();
  }

  public static function deleteLanguagesQuestionsById($id)
  {
    return Question::where('question_id', $id)->delete();
  }

  public static function deleteAllQuestionByLanguage($language_id)
  {
    return Question::where('language_id', $language_id)->delete();
  }
}
