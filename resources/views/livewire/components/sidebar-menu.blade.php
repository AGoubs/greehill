<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <a href="{{ route('dashboard') }}">
      <img aria-hidden="true" class="ml-6 dark:hidden" src="{{ asset('img/greehill-wordmark-dark.png') }}" alt="Logo greehill" width="140">
      <img aria-hidden="true" class="hidden ml-6 dark:block" src="{{ asset('img/greehill-wordmark-light.png') }}" alt="Logo greehill" width="140">
    </a>
    <ul class="mt-6">
      <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="{{ route('dashboard') }}">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
    </ul>
    <ul class="mt-3">
      @foreach ($languages as $language)
        <li class="relative px-6 py-3">
          <article class="sidebar_feature">
            <input type="checkbox" id="sidebar_language_{{ $language->id }}" name="sidebar_language" value="{{ $language->id }}" wire:click="addSelectedLanguage({{ $language->id }})" />
            <div>
              <label class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-gray-800 dark:text-gray-200" for="sidebar_language_{{ $language->id }}" style="margin-top: -5px;"><span class="fi fi-{{ $language->abbreviation }}" style="width:50px;height: 30px;margin-right:10px; border-radius:2px"></span><span>{{ $language->name }}</span></label>
            </div>
          </article>
        </li>
      @endforeach
    </ul>
  </div>
</aside>
<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
  @keydown.escape="closeSideMenu">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <a href="{{ route('dashboard') }}">
      <img aria-hidden="true" class="ml-6 dark:hidden" src="{{ asset('img/greehill-wordmark-dark.png') }}" alt="Logo greehill" width="140">
      <img aria-hidden="true" class="hidden ml-6 dark:block" src="{{ asset('img/greehill-wordmark-light.png') }}" alt="Logo greehill" width="140">
    </a>
    <ul class="mt-3">
      @foreach ($languages as $language)
        <li class="relative px-6 py-3">
          <article class="sidebar_feature">
            <input type="checkbox" id="sidebar_language_{{ $language->id }}" name="sidebar_language" value="{{ $language->id }}" wire:click="addSelectedLanguage({{ $language->id }})" />
            <div>
              <label class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-gray-800 dark:text-gray-200" for="sidebar_language_{{ $language->id }}" style="margin-top: -5px;"><span class="fi fi-{{ $language->abbreviation }}" style="width:50px;height: 30px;margin-right:10px; border-radius:2px"></span><span>{{ $language->name }}</span></label>
            </div>
          </article>
        </li>
      @endforeach
    </ul>
  </div>
</aside>
