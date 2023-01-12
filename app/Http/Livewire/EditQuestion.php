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
    $this->language_id = $this->object->language_id;
  }

  public function addQuestion()
  {
    $this->validate();

    $this->object->question = $this->question;
    $this->object->answer = $this->answer;
    $this->object->language_id = $this->language_id;
    $this->object->translated = false;
    $this->object->save();

    session()->flash('flash.banner', 'Question edited successfully');
    redirect()->route('dashboard');
  }

  public function deleteQuestion()
  {
    // $this->object->delete();
    Question::deleteLanguagesQuestionsById($this->object->question_id);

    session()->flash('flash.banner', 'Question deleted successfully');
    redirect()->route('dashboard');
  }
}
