<!DOCTYPE html>
<html :class="{ 'dark': dark }" lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="data()">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  @livewireStyles

  <!-- Scripts -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flagCheckbox.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flagSidebar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/spinner.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/init-alpine.js') }}"></script>
  <script src="{{ asset('js/sidebarFlag.js') }}"></script>
</head>
<div class="flex min-h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

  @livewire('components.sidebar-menu')

  <div class="flex flex-col flex-1 w-full">
    @livewire('navigation-menu')
    <x-jet-banner />

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
