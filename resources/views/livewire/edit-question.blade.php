<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Edit a question
    </h2>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <form wire:submit.prevent="addQuestion" action="#" method="POST">
        <div class="flex justify-end">
          <button type="button" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" aria-label="Delete" onclick="confirm('Delete this question in all languages ?') || event.stopImmediatePropagation()" wire:click="deleteQuestion()">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 448 512">
              <path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
            </svg>
          </button>
        </div>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Question</span>
          <x-jet-input type="text" placeholder="Question" wire:model.defer="question" required autofocus />
        </label>
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Answer</span>
          {{-- <x-jet-textarea placeholder="Enter the answer" wire:model.defer="answer" required /> --}}
          <textarea name="answer" id="answer" wire:model.defer="answer" required></textarea>

        </label>

        {{-- <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Language</span>
          <br>
          @foreach ($languages as $language)
            <article class="feature">
              <input type="radio" id="language{{ $language->id }}" name="language" value="{{ $language->id }}" wire:model.defer="language_id" />
              <div>
                <label for="language{{ $language->id }}" style="margin-top: -5px;"><span class="fi fi-{{ $language->abbreviation }}" style="width:50px;height: 30px;"></span></label>
              </div>
            </article>
          @endforeach --}}
        </label>
        <div class="container py-3 mx-0 min-w-full flex flex-col items-center">
          <x-jet-button onclick="getContent()">
            {{ __('Save') }}
          </x-jet-button>
        </div>
      </form>
    </div>
  </div>
</main>

<script>
  tinymce.init({
    selector: 'textarea#answer',
    plugins: 'autolink codesample link lists searchreplace table visualblocks wordcount checklist casechange export formatpainter linkchecker a11ychecker permanentpen powerpaste advtable advcode  tableofcontents footnotes typography inlinecss',
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
    var myContent = tinymce.get("answer").getContent();
    @this.answer = myContent;
  }
</script>
