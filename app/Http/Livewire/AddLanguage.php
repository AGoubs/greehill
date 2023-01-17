<?php

namespace App\Http\Livewire;

use App\Models\Language;
use App\Models\Question;
use DeepL\Translator;
use Livewire\Component;

class AddLanguage extends Component
{
  public $language;
  public $name;
  public $english_name;
  public $abbreviation;
  public $flag;

  public function render()
  {
    return view('livewire.add-language');
  }

  public function addLanguage()
  {
    $authKey = "0622e6ba-11e2-752c-ed3b-950ddb8020f8:fx"; // Replace with your key
    $translator = new Translator($authKey);

    $englishQuestions = Question::getDifferentEnglishQuestion(Question::getNumberQuestionId());

    $newLanguage = Language::create([
      'name' => $this->name,
      'english_name' => $this->english_name,
      'abbreviation' => $this->abbreviation,
      'flag' => $this->flag
    ]);

    foreach ($englishQuestions as $question) {
      Question::create([
        'question_id' => $question->question_id,
        'language_id' => $newLanguage->id,
        'question' => $translator->translateText($question->question, 'en', $newLanguage->abbreviation),
        'answer' => $translator->translateText($question->answer, 'en', $newLanguage->abbreviation),
        'translated' => true,
      ]);
    }

    session()->flash('flash.banner', 'Language added successfully');
    redirect()->route('dashboard');
  }
}
