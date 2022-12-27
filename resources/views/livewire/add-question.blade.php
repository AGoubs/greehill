   <main class="h-full pb-16 overflow-y-auto">
     <div class="container px-6 mx-auto grid">
       <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
         Add a new question
       </h2>
       <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
         <form wire:submit.prevent="addQuestion" action="#" method="POST">
           <div class="mb-4">
             @foreach ($languages as $language)
               @if ($language->id == 1)
                 <span class="fi fi-{{ $language->abbreviation }}"></span><input value="{{ $language->id }}" wire:model="language_id" type="radio" name="language" id="language" checked>
               @else
                 <span class="fi fi-{{ $language->abbreviation }}"></span><input value="{{ $language->id }}" wire:model="language_id" type="radio" name="language" id="language">
               @endif
             @endforeach
           </div>
           <label class="block text-sm">
             <span class="text-gray-700 dark:text-gray-400">Question</span>
             <x-jet-input type="text" placeholder="Question" wire:model.defer="question" required autofocus />
           </label>
           <label class="block mt-4 text-sm">
             <span class="text-gray-700 dark:text-gray-400">Answer</span>
             <x-jet-textarea placeholder="Enter the answer" wire:model.defer="answer" />
           </label>
           <div class="container py-3 mx-0 min-w-full flex flex-col items-center">
             <x-jet-button>
               {{ __('Add question') }}
             </x-jet-button>
           </div>
         </form>
       </div>
     </div>
   </main>
