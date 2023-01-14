  <main class="h-full overflow-y-auto">

    <div class="px-6 grid mx-auto" style="width: 100%;">
      <div class="flex justify-between">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
          Dashboard
        </h2>
        {{-- <label class="block my-8 text-sm">
          @for ($i = 1; $i < 4; $i++)
            <article class="column">
              <input type="radio" id="nbColumn" name="nbColumn" value="{{ $i }}" wire:model="nbColumn" />
              <div>
                <label for="nbColumn" class=" dark:text-gray-200">{{ $i }}</label>
              </div>
            </article>
          @endfor
        </label> --}}
        <a class="flex items-center justify-between p-4 my-6 w-64 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="{{ route('question.add') }}">
          <div class="flex items-center">
            <span>New question</span>
          </div>
          <span>&RightArrow;</span>
        </a>
      </div>
      <!-- CTA -->
      {{-- <div class="flex justify-end">
        <a class="flex items-center justify-between p-4 mb-8 w-64 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="{{ route('question.add') }}">
          <div class="flex items-center">
            <span>New question</span>
          </div>
          <span>&RightArrow;</span>
        </a>
      </div> --}}
      <!-- Cards -->
      <table class="w-full" style="border-collapse: separate; 
border-spacing: 2em 1em;table-layout: fixed; width: 100%;">
        <tbody class="divide-y dark:divide-gray-700 dark:bg-gray-800 ">
          @foreach ($nbQuestionId as $item)
            <tr class="text-gray-700 dark:text-gray-400 pb-6 items-top bg-white rounded-lg shadow-xs dark:bg-gray-800">

              @foreach ($questions as $question)
                @if ($question->question_id == $item->question_id && in_array($question->language_id, $languages))
                  <td class="px-4 py-3 rounded-lg " style="display:table-cell;vertical-align:top; ">
                    <div @class([
                        'translated' => $question->translated,
                        'question',
                        'mr-5',
                        'relative',
                    ])>
                      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $question->question }}
                      </p>
                      <br>
                      <p class="text-lg ml-3 text-gray-700 dark:text-gray-200">
                        {{ $question->answer }}
                      </p>
                      <div class="flex justify-end">
                        <a class="flex items-center justify-between mb-2 px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" aria-label="Edit"href="{{ route('question.edit', $question->id) }}">
                          <svg class="w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                          </svg>
                        </a>
                        <a class="flex items-center justify-between ml-3 mb-2 px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" aria-label="Edit"href="{{ route('dashboard', $question->question_id) }}">

                          <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path fill="#fff"
                              d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zm48 0c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </td>
                @endif
              @endforeach
            </tr>
          @endforeach

        </tbody>
      </table>
      {{-- <div class="grid gap-6 mb-8 md:grid-cols-{{ $nbColumn }} flex justify-center">
          @if ($languages != [])
            @foreach ($languages as $language)
              <div class="flex items-top p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-gray-500 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-500" style="max-height: 45px">
                  <span class="fi fi-{{ $language->abbreviation }}"></span>
                </div>
                <div>
                  <p class="mb-6 text-sm font-medium text-gray-600 dark:text-gray-400">
                    {{ $language->name }}
                  </p>
                  @if ($questions != null)
                    @foreach ($questions as $question)
                      @if ($question->language_id == $language->id)
                        <div @class([
                            'translated' => $question->translated,
                            'question',
                            'mr-5',
                        ])>
                          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ $question->question }}
                          </p>
                          <p class="text-lg ml-6 text-gray-700 dark:text-gray-200">
                            {{ $question->answer }}
                          </p>
                        </div>

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
          @endif --}}

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
