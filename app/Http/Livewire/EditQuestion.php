<?php

namespace App\Http\Livewire;

use App\Models\Language;
use App\Models\Question;
use Livewire\Component;
use Illuminate\Support\Str;

class EditQuestion extends Component
{
  public $object;
  public $languages;
  public $question;
  public $answer;
  public $language_id = "2";
  public $question_id;

  protected $rules = [
    'question' => 'required',
    'answer' => 'required',
    'language_id' => 'required',
  ];

  public function render()
  {
    $this->languages = Language::getAllLanguages();
    return view('livewire.edit-question');
  }

  public function mount($questionId)
  {
    $this->object = Question::find($questionId);
    $this->question = $this->object->question;
    $this->answer = $this->object->answer;
  }

  public function addQuestion()
  {
    $this->validate();

    $this->object->question = $this->question;
    $this->object->answer = $this->answer;
    $this->object->save();

    session()->flash('flash.banner', 'Question edited successfully');
    redirect()->route('dashboard');
  }
}
