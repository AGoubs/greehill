<?php

namespace App\Http\Livewire;

use App\Models\Language;
use App\Models\Question;
use Livewire\Component;

class DeleteLanguage extends Component
{
  public $languages;
  public $language_id;

  public function render()
  {
    $this->languages = Language::getAllLanguages();

    return view('livewire.delete-language');
  }

  public function deleteLanguage()
  {
    Question::deleteAllQuestionByLanguage($this->language_id);
    Language::deteleLanguage($this->language_id);
    redirect()->route('dashboard');
  }
}
