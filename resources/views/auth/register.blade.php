<x-guest-layout>
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 mt-2">
                         <a href="/" class="app-brand-link gap-2">
                            <img src="{{ asset('assets/img/logo/logo.png') }}"
                            alt="Logo ERP INNOV"
                            style="width: 40px; height: 40px;"
                            class="img-fluid">
                            <span class="app-brand-text demo text-body fw-bold ms-1">ERP INNOV</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    {{-- <h4 class="mb-1 pt-2">ERP INNOV 🚀</h4> --}}
                    {{-- <p class="mb-4">S'inscrire</p> --}}
                    <x-validation-errors class="mb-4" />
                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Champ pour le nom d'utilisateur -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom ou pseudo</label>
                            <input type="text" class="form-control" id="login" name="name" placeholder="Entrer votre nom"
                                value="{{ old('name') }}" required autofocus autocomplete="name" />
                        </div>

                        <!-- Champ pour l'email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre email"
                                value="{{ old('email') }}" required autocomplete="email" />
                        </div>

                        <!-- Champ pour le mot de passe -->
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Mot de passe</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Mot de passe"
                                    aria-describedby="password" required autocomplete="new-password" />
                            </div>
                        </div>

                        <!-- Champ pour la confirmation du mot de passe -->
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password_confirmation">Confirmer mot de passe</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                                    placeholder="Confirmer mot de passe" required autocomplete="new-password" />
                            </div>
                        </div>

                        <!-- Conditions générales d'utilisation -->
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms-conditions" required name="terms" />
                                <label class="form-check-label" for="terms-conditions">
                                    {!! __("J'accepte les conditions d'utilisation et la politique de confidentialité.", [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                                        of Service').'</a>',
                                    'la politique de confidentialité' => '<a target="_blank" href="'.route('policy.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                                        Policy').'</a>',
                                    ]) !!}
                                </label>
                            </div>
                        </div>
                        @endif

                        <!-- Bouton d'inscription -->
                        <button class="btn btn-primary d-grid w-100">Créer un compte</button>
                    </form>

                    <p class="text-center">
                        <span>Vous avez déjà un compte ?</span>
                        <a href="/login">
                            <span>Connectez-vous</span>
                        </a>
                    </p>

                    <div class="divider my-4">
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
                <!-- /Logo -->
            </div>
        </div>
        <!-- Register Card -->
    </div>
</div>
</x-guest-layout>
