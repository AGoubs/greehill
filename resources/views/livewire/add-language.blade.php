   <main class="h-full pb-16 overflow-y-auto">
     <div class="container px-6 mx-auto grid">
       <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
         Add a new language
       </h2>

       <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
         <form wire:submit.prevent="addLanguage" action="#" method="POST">
           <label class="block text-sm mt-2">
             <span class="text-gray-700 dark:text-gray-400">Name</span>
             <x-jet-input type="text" placeholder="Name" wire:model.defer="name" required autofocus />
           </label>
           <label class="block mt-4 text-sm">
             <span class="text-gray-700 dark:text-gray-400">English name</span>
             <x-jet-input type="text" placeholder="English name" wire:model.defer="english_name" required />

           </label>
           <label class="block mt-4 text-sm">
             <span class="text-gray-700 dark:text-gray-400">Abbreviation</span>
             <x-jet-input type="text" placeholder="Abbreviation" wire:model.defer="abbreviation" required />
             <a class="text-gray-700 dark:text-gray-400" href="https://www.deepl.com/fr/docs-api/translate-text/" target="_blank">Link to Deepl API</a>

           </label>
           <label class="block mt-4 text-sm">
             <span class="text-gray-700 dark:text-gray-400">Flag</span>
             <x-jet-input type="text" placeholder="Flag" wire:model.defer="flag" required />
             <a class="text-gray-700 dark:text-gray-400" href="https://flagicons.lipis.dev/" target="_blank">Link to Flag API</a>
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
               {{ __('Add Language') }}
             </x-jet-button>
           </div>
         </form>
       </div>
     </div>
   </main>
