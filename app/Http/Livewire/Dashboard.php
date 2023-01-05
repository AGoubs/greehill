<?php

namespace App\Http\Livewire;

use App\Models\Language;
use App\Models\Question;
use Livewire\Component;

class Dashboard extends Component
{
  public $questions;
  public $languages;
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
  }
}
