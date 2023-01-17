<x-guest-layout>
  <div class="flex flex-col overflow-y-auto md:flex-row">
    <div class="h-32 md:h-auto md:w-1/2">
      <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('img/create-account-office.jpeg') }}" alt="Office" />
      <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{ asset('img/create-account-office-dark.jpeg') }}" alt="Office" />
    </div>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
      <div class="w-full">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            Create account
          </h1>
          <label class="block text-sm">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          </label>
          <label class="block mt-4 text-sm">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
          </label>
          <label class="block mt-4 text-sm">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
          </label>
          <label class="block mt-4 mb-6 text-sm">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
          </label>
          <!-- You should use a button here, as the anchor is only used for the example  -->
          <x-jet-block-button>
            {{ __('Register') }}
          </x-jet-block-button>

          <x-jet-validation-errors class="mb-4" />

          <hr class="my-8" />

          <p class="mt-4">
            <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('login') }}">
              Already have an account? Login
            </a>
          </p>
        </form>
      </div>
    </div>
  </div>

</x-guest-layout>
