<x-guest-layout>



  @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ session('status') }}
    </div>
  @endif

  <div class="flex flex-col overflow-y-auto md:flex-row">
    <div class="h-32 hidden sm:block md:h-auto md:w-1/2">
      <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('img/login-office.jpeg') }}" alt="Office" />
      <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{ asset('img/login-office-dark.jpeg') }}" alt="Office" />
    </div>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
      <div class="w-full">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
            Login
          </h1>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Email</span>
            <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />
          </label>
          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Password</span>
            <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" aria-placeholder="******************" />
          </label>

          <x-jet-validation-errors class="mb-4" />

          <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
              <x-jet-checkbox id="remember_me" name="remember" />
              <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
          </div>

          <x-jet-block-button>
            {{ __('Log in') }}
          </x-jet-block-button>

          <hr class="my-8" />

          @if (Route::has('password.request'))
            <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('password.request') }}">
              {{ __('Forgot your password?') }}
            </a>
          @endif

          {{-- <p class="mt-4">
          <p class="mt-1">
            <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="./create-account.html">
              Create account
            </a>
          </p> --}}
        </form>
      </div>
    </div>
  </div>
</x-guest-layout>
