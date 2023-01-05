  <main class="h-full overflow-y-auto">
    <div class="container px-6 grid" style="max-width: max-content;">
      <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Dashboard
      </h2>
      <!-- CTA -->
      <div class="flex justify-end">
        <a class="flex items-center justify-between p-4 mb-8 w-64 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="{{ route('question.add') }}">
          <div class="flex items-center">
            <span>New question</span>
          </div>
          <span>&RightArrow;</span>
        </a>
      </div>
      <!-- Cards -->
      <div class="grid gap-6 mb-8 md:grid-cols-3">
        <!-- Card -->
        @if ($languages != [])
          @foreach ($languages as $language)
            <div class="flex items-top p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
              <div class="p-3 mr-4 text-gray-500 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-500" style="max-height: 45px">
                <span class="fi fi-{{ $language->abbreviation }}"></span>
              </div>
              <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                  {{ $language->name }}
                </p>
                @if ($questions != null)
                  @foreach ($questions as $question)
                    @if ($question->language_id == $language->id)
                      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $question->question }}
                      </p>
                      <p class="text-lg text-gray-700 dark:text-gray-200">
                        {{ $question->answer }}
                      </p>
                      <div class="flex justify-end">
                        <a class="flex items-center justify-between mb-2 px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" aria-label="Edit"href="{{ route('question.edit', $question->id) }}">

                          <svg class="w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                          </svg>
                        </a>
                      </div>
                      <br>
                    @endif
                  @endforeach
                @endif
              </div>
            </div>
          @endforeach
        @endif
        {{-- <div class="flex items-top p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-gray-500 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-500" style="max-height: 45px">
            <span class="fi fi-us"></span>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              English
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              How is this company constituted (number of people, sales, developer, technician ....) ?
            </p>
            <p class="text-lg text-gray-700 dark:text-gray-200">
              Approximately 60 people, including 50 at the company's headquarters (developers, general administration, world management) in Budapest. 5 subsidiaries opened around the world: Singapore, Berlin, Paris, San Francisco and Budapest.
              We install in every country a team of employees (like customer success manager, project manager, business development manager) for the daily job routine, so that clients have a short and direct contact in their country.
            </p>

          </div>
        </div>
        <div class="flex items-top p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div class="p-3 mr-4 text-gray-500 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-500" style="max-height: 45px">
            <span class="fi fi-hu"></span>
          </div>
          <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
              Hçunyd
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
              How is this company constituted (number of people, sales, developer, technician ....) ?
            </p>
            <p class="text-lg text-gray-700 dark:text-gray-200">
              Approximately 60 people, including 50 at the company's headquarters (developers, general administration, world management) in Budapest. 5 subsidiaries opened around the world: Singapore, Berlin, Paris, San Francisco and Budapest.
              We install in every country a team of employees (like customer success manager, project manager, business development manager) for the daily job routine, so that clients have a short and direct contact in their country.
            </p>

          </div>
        </div> --}}

      </div>


    </div>
  </main>
