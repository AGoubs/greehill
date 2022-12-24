<!DOCTYPE html>
<html :class="{ 'dark': dark }" lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="data()">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  @livewireStyles

  <!-- Scripts -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>
<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
  {{-- <x-jet-banner /> --}}

  @livewire('components.sidebar-menu')

  <div class="flex flex-col flex-1 w-full">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    {{-- @if (isset($header))
      <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endif --}}

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>
</div>

@stack('modals')

@livewireScripts
</body>

</html>
