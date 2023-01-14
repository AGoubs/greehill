<?php

namespace App\Http\Livewire;

use App\Models\Language;
use App\Models\Question;
use Livewire\Component;

class Dashboard extends Component
{
  public $questions;
  public $questionId;
  public $nbQuestionId;
  public $languages;
  public $nbColumn = 1;

  protected $listeners = ['selectedLanguages'];

  public function render()
  {

    $this->nbQuestionId = Question::getNumberQuestionId();
    if ($this->questionId) {
      $this->nbColumn = 3;
      $this->languages = Language::pluck('id')->toArray();
      $this->questions = Question::getLanguagesQuestionsById($this->questionId);
    } else {
      if (!$this->languages) {
        $this->selectedLanguages([2]);
      }
      $this->questions = Question::getAllQuestions();
    }
    return view('livewire.dashboard');
  }

  public function selectedLanguages($array)
  {
    $this->languages = $array;
    // $this->languages = Language::getArrayLanguages($array);

    if (count($array) < 4) {
      $this->nbColumn = count($array);
    }
  }

  public function changeNbColumn($value)
  {
    $this->nbColumn = $value;
  }

  public function mount()
  {
  }
}
