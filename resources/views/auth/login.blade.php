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
                                {{-- <span class="app-brand-logo demo">
                                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                            fill="#7367F0" />
                                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                            fill="#161616" />
                                        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                            fill="#161616" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                            fill="#7367F0" />
                                    </svg>
                                </span> --}}
                                <span class="app-brand-text demo text-body fw-bold ms-1">Gasikara Digital</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="pt-2 mb-1">ERP INNOV! 👋</h4>
                        <p class="mb-4">Veuillez vous connecter à votre compte et commencer l'aventure</p>
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
                                        <small>{{ __('Forgot your password?') }}</small>
                                    </a>
                                    @endif
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="Mot de passe"
                                        aria-describedby="password" />
                                    {{-- <span class="cursor-pointer input-group-text"><i class="ti ti-eye-off"></i></span> --}}
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember" />
                                    <label class="form-check-label" for="remember-me"> {{ __('Remember me') }} </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Log in') }}</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>Nouveau sur notre plateforme ?</span>
                            <a href="/register">
                                <span>S'inscrire</span>
                            </a>
                        </p>

                        <div class="my-4 divider">
                            <div class="divider-text">ou</div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                                <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
                            </a>

                            <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                                <i class="tf-icons fa-brands fa-google fs-5"></i>
                            </a>

                            <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                                <i class="tf-icons fa-brands fa-twitter fs-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
</x-guest-layout>
