<?php

namespace App\Http\Livewire;

use App\Models\Language;
use App\Models\Question;
use Livewire\Component;
use Illuminate\Support\Str;

class AddQuestion extends Component
{
  public $languages;
  public $question;
  public $answer;
  public $language_id = "2";
  public $question_id;

  public function render()
  {
    $this->languages = Language::getAllLanguages();
    return view('livewire.add-question');
  }

  public function addQuestion()
  {
    Question::create([
      'question_id' => Str::random(),
      'language_id' => $this->language_id,
      'question' => $this->question,
      'answer' => $this->answer,
    ]);

    session()->flash('flash.banner', 'Question added successfully');
    redirect()->route('dashboard');
  }
}
