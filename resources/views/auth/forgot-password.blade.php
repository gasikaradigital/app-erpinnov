<x-guest-layout>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card> --}}

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner py-6">
            <!-- Forgot Password -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center mb-6">
                  <a href="index.html" class="app-brand-link">
                    <span class="app-brand-logo demo">
                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0"></path>
                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616"></path>
                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0"></path>
                    </svg>
                    </span>
                    <span class="app-brand-text demo text-heading fw-bold">Vuexy</span>
                  </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-1 mt-3">Mot de passe oublié? 🔒</h4>
                <x-validation-errors class="mb-4" />
                <p class="mb-6">Entrez votre email et nous vous enverrons des instructions pour réinitialiser votre mot de passe.</p>
                @session('status')
                    <div class="alert alert-success" role="alert">
                        {{ $value }}
                    </div>
                @endsession
                <form method="POST" action="{{ route('password.email') }}" class="mb-6 fv-plugins-bootstrap5 fv-plugins-framework">
                    @csrf
                    <div class="mb-6 fv-plugins-icon-container">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input type="email" id="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Entrez votre email">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                 </div>
                  <button type="submit" class="btn btn-primary d-grid w-100 waves-effect waves-light mt-3">{{ __('Email Password Reset Link') }}</button>
                </form>
                <div class="text-center mt-3">
                  <a href="/login" class="d-flex justify-content-center">
                    <i class="ti ti-chevron-left scaleX-n1-rtl me-1_5"></i>
                    Retour à la connexion
                  </a>
                </div>
              </div>
            </div>
            <!-- /Forgot Password -->
          </div>
        </div>
      </div>
</x-guest-layout>
