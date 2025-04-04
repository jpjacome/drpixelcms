<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="control-panel-auth-form">
        @csrf

        <!-- Name -->
        <div class="control-panel-form-group">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="control-panel-error-container" />
        </div>

        <!-- Email Address -->
        <div class="control-panel-form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="control-panel-error-container" />
        </div>

        <!-- Password -->
        <div class="control-panel-form-group">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="control-panel-error-container" />
        </div>

        <!-- Confirm Password -->
        <div class="control-panel-form-group">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="control-panel-error-container" />
        </div>

        <div class="control-panel-form-actions">
            <a class="control-panel-link" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
