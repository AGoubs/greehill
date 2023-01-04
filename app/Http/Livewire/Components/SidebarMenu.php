<?php

namespace App\Http\Livewire\Components;

use App\Models\Language;
use Livewire\Component;

class SidebarMenu extends Component
{
  public $languages;
  public $selectedLanguages = [];

  public function render()
  {
    $this->languages = Language::getAllLanguages();
    return view('livewire.components.sidebar-menu');
  }

  public function addSelectedLanguage($id)
  {
    if (($key = array_search($id, $this->selectedLanguages)) !== false) {
      unset($this->selectedLanguages[$key]);
      $this->selectedLanguages = array_values($this->selectedLanguages);
    } else {
      array_push($this->selectedLanguages, $id);
    }
    $this->emit('selectedLanguages', $this->selectedLanguages);
  }

  public function mount()
  {
  }
}
