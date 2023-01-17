   <main class="h-full pb-16 overflow-y-auto">
     <div class="container px-6 mx-auto grid">
       <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
         Delete a language
       </h2>

       <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
         <form wire:submit.prevent="deleteLanguage" action="#" method="POST">
           <label class="block mt-4 text-sm">
             <span class="text-gray-700 dark:text-gray-400">Language</span>
             <br>
             @foreach ($languages as $language)
               <article class="feature">
                 <input type="radio" id="language{{ $language->id }}" name="language" value="{{ $language->id }}" wire:model.defer="language_id" />
                 <div>
                   <label for="language{{ $language->id }}" style="margin-top: -5px;"><span class="fi fi-{{ $language->flag }}" style="width:50px;height: 30px;"></span></label>
                 </div>
               </article>
             @endforeach
           </label>

           <div class="container py-3 mx-0 min-w-full flex flex-col items-center">
             <div wire:loading>
               <div class="lds-ring">
                 <div></div>
                 <div></div>
                 <div></div>
                 <div></div>
               </div>
             </div>
             <x-jet-button>
               {{ __('Delete Language') }}
             </x-jet-button>
           </div>
         </form>
       </div>
     </div>
   </main>
