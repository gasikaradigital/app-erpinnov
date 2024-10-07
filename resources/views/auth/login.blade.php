<x-guest-layout>
<div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="py-4 authentication-inner">
                <!-- Login -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="mt-2 mb-4 app-brand justify-content-center">
                            <a href="/" class="gap-2 app-brand-link">
                                <span class="app-brand-text demo text-body fw-bold ms-1">ERP INNOV</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <x-validation-errors class="mb-2" />
                        @session('status')
                        <div class="mb-2 text-sm font-medium text-danger">
                            {{ $value }}
                        </div>
                        @endsession
                        <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Entrer votre email" :value="old('email')"
                                    required autofocus autocomplete="email" />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Mot de passe</label>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        <small>{{ __('Mot de passe oublié ?') }}</small>
                                    </a>
                                    @endif
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="Mot de passe"
                                        aria-describedby="password" />
                                    <span class="cursor-pointer input-group-text">
                                        <i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember" />
                                    <label class="form-check-label" for="remember-me"> {{ __('Se souvenir de moi') }} </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Se connecter') }}</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>Nouveau sur notre plateforme ?</span>
                            <a href="/register">
                                <span>S'inscrire</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
</x-guest-layout>
