<?php

namespace App\Http\Livewire;

use App\Models\Language;
use App\Models\Question;
use Livewire\Component;

class Dashboard extends Component
{
  public $questions;
  public $languages;
  public $nbColumn = 1;

  protected $listeners = ['selectedLanguages'];

  public function render()
  {
    // $this->languages = Language::whereIn('id',[1,2])->get();
    $this->questions = Question::getAllQuestions();
    return view('livewire.dashboard');
  }

  public function selectedLanguages($array)
  {
    $this->languages = Language::getArrayLanguages($array);

    if (count($array) < 4) {
      $this->nbColumn = count($array);
    }
  }

  public function changeNbColumn($value)
  {
    $this->$nbColumn = $value;
  }
}
