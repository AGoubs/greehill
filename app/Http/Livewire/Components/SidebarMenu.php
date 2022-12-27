<?php

namespace App\Http\Livewire\Components;

use App\Models\Language;
use Livewire\Component;

class SidebarMenu extends Component
{
  public $languages;

  public function render()
  {
    $this->languages = Language::getAllLanguages();
    return view('livewire.components.sidebar-menu');
  }

  public function mount()
  {
  }
}
