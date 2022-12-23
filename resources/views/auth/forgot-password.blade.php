<x-guest-layout>
  @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ session('status') }}
    </div>
  @endif

  <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="flex flex-col overflow-y-auto md:flex-row">
      <div class="h-32 md:h-auto md:w-1/2">
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('img/forgot-password-office.jpeg') }}" alt="Office" />
        <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{ asset('img/forgot-password-office-dark.jpeg') }}" alt="Office" />
      </div>
      <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
          <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            Forgot password
          </h1>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Email</span>
            <x-jet-input id="email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="email" name="email" :value="old('email')" required autofocus />
          </label>

          <x-jet-validation-errors class="mb-4" />

          <x-jet-button>
            {{ __('Email Password Reset Link') }}
          </x-jet-button>

        </div>
      </div>
    </div>
  </form>
</x-guest-layout>
