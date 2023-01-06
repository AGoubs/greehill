<?php

namespace App\Http\Livewire;

use App\Models\Language;
use App\Models\Question;
use Livewire\Component;
use Illuminate\Support\Str;
use DeepL\Translator;

class AddQuestion extends Component
{
  public $languages;
  public $question;
  public $answer;
  public $language_id = "2";
  public $question_id;

  public function render()
  {
    $this->question_id = Question::latest()->first()->question_id + 1;
    // dd($this->question_id);
    $this->languages = Language::getAllLanguages();
    return view('livewire.add-question');
  }

  public function addQuestion()
  {
    $authKey = "0622e6ba-11e2-752c-ed3b-950ddb8020f8:fx"; // Replace with your key
    $translator = new Translator($authKey);
    $result = $translator->translateText('Hello, world!', null, 'fr');
    // dd($result->text);
    foreach ($this->languages as $language) {
      Question::create([
        'question_id' => $this->question_id,
        'language_id' => $language->id,
        'question' => $translator->translateText($this->question, 'en', $language->abbreviation),
        'answer' => $translator->translateText($this->answer, 'en', $language->abbreviation),
      ]);
    }

    session()->flash('flash.banner', 'Question added successfully');
    redirect()->route('dashboard');
  }
}
