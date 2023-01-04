<?php

namespace App\Http\Livewire\Components;

use App\Models\Language;
use Livewire\Component;

class FlagCheckbox extends Component
{
  public $languages;
  public $language_id = "2";

  public function render()
  {
    $this->languages = Language::getAllLanguages();
    return view('livewire.components.flag-checkbox');
  }
}
