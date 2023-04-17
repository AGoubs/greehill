   <main class="h-full pb-16 overflow-y-auto">
     <div class="container px-6 mx-auto grid">
       <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
         Add a new question
       </h2>

       <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
         <form wire:submit.prevent="addQuestion" action="#" method="POST">
           <label class="block text-sm mt-2">
             <span class="text-gray-700 dark:text-gray-400">Question</span>
             <x-jet-input id="question" type="text" placeholder="Question" wire:model.defer="question" required autofocus />
           </label>
           <label class="block mt-4 text-sm">
             <span class="text-gray-700 dark:text-gray-400">Answer</span>
             <textarea name="answer" id="answer" wire:model.defer="answer"></textarea>
             {{-- <x-jet-textarea placeholder="Enter the answer" wire:model.defer="answer" required /> --}}
           </label>

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
             <x-jet-button onclick="getContent()">
               {{ __('Add question') }}
             </x-jet-button>
           </div>
         </form>
       </div>
     </div>
   </main>

   <script>
     tinymce.init({
       selector: 'textarea#answer',
       plugins: 'autolink codesample link lists searchreplace visualblocks wordcount checklist casechange export formatpainter linkchecker a11ychecker permanentpen powerpaste advtable advcode  tableofcontents footnotes typography inlinecss',
       toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
       tinycomments_mode: 'embedded',
       tinycomments_author: 'Author name',
       mergetags_list: [{
           value: 'First.Name',
           title: 'First Name'
         },
         {
           value: 'Email',
           title: 'Email'
         },
       ]
     });

     function getContent() {

       if (document.getElementById("question").value) {

         var myContent = tinymce.get("answer").getContent();
         @this.answer = myContent;
       }
     }
   </script>
