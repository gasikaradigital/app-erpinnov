<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-wide customizer-hide" dir="ltr"
    data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

</head>

<body>
    <script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>

    <x-navbar/>

    <!-- Sections:Start -->
    {{ $slot }}
    <!-- / Sections:End -->

   <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
        <div class="footer-top">
            <div class="container">
                <div class="row gx-0 gy-4 g-md-5">
                    <div class="col-lg-5">
                        <a href="landing-page.html" class="mb-4 app-brand-link">
                            <span class="app-brand-logo demo">
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
                            </span>
                            <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Erpinnov.com</span>
                        </a>
                        <p class="mb-4 footer-text footer-logo-description">
                            Modèle de tableau de bord d’administration le plus convivial et hautement personnalisable pour les développeuses.
                        </p>
                        <form class="footer-form">
                            <label for="footer-email" class="small">S’abonner à la newsletter</label>
                            <div class="mt-1 d-flex">
                                <input type="email" class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                                    id="footer-email" placeholder="" />
                                <button type="submit"
                                    class="shadow-none btn btn-primary rounded-0 rounded-end-bottom rounded-end-top" >
                                    S’abonner
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="mb-4 footer-title">Menu</h6>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="../vertical-menu-template/" target="_blank" class="footer-link">Acceuil
                                    </a>
                            </li>
                            <li class="mb-3">
                                <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Tarif
                                    </a>
                            </li>
                            <li class="mb-3">
                                <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Blog
                                    </a>
                            </li>
                            <li class="mb-3">
                                <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link">FAQ
                                    </a>
                            </li>
                            <li class="mb-3">

                                <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Contact
                                    </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="mb-4 footer-title">Aides</h6>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="pricing-page.html" class="footer-link">Dolibarr ERP/CRM</a>
                            </li>
                            <li class="mb-3">
                                <a href="payment-page.html" class="footer-link">Documentation</a>
                            </li>
                            <li class="mb-3">
                                <a href="checkout-page.html" class="footer-link">Tutoriel Videos</a>
                            </li>
                            <li class="mb-3">
                                <a href="help-center-landing.html" class="footer-link">Status des cervices</a>
                            </li>
                            <li class="mb-3">
                                <a href="/login" target="_blank"
                                    class="footer-link">Votre espace client</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <h6 class="mb-4 footer-title">Téléchargez notre application</h6>
                        <a href="javascript:void(0);" class="pb-2 mb-3 d-block footer-link"><img
                                src="assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon" /></a>
                        <a href="javascript:void(0);" class="d-block footer-link"><img
                                src="assets/img/front-pages/landing-page/google-play-icon.png" alt="google play icon" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 footer-bottom">
            <div
                class="container flex-wrap text-center d-flex justify-content-between flex-md-row flex-column text-md-start">
                <div class="mb-2 mb-md-0">
                    <span class="footer-text">©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </span>
                    <a href="https://pixinvent.com" target="_blank" class="text-white fw-medium footer-link">Pixinvent,</a>
                    <span class="footer-text"> </span>
                </div>
                <div>
                    <a href="https://github.com/pixinvent" class="footer-link me-3" target="_blank">
                        <img src="assets/img/front-pages/icons/github-light.png" alt="github icon"
                            data-app-light-img="front-pages/icons/github-light.png"
                            data-app-dark-img="front-pages/icons/github-dark.png" />
                    </a>
                    <a href="https://www.facebook.com/pixinvents/" class="footer-link me-3" target="_blank">
                        <img src="assets/img/front-pages/icons/facebook-light.png" alt="facebook icon"
                            data-app-light-img="front-pages/icons/facebook-light.png"
                            data-app-dark-img="front-pages/icons/facebook-dark.png" />
                    </a>
                    <a href="https://twitter.com/pixinvents" class="footer-link me-3" target="_blank">
                        <img src="assets/img/front-pages/icons/twitter-light.png" alt="twitter icon"
                            data-app-light-img="front-pages/icons/twitter-light.png"
                            data-app-dark-img="front-pages/icons/twitter-dark.png" />
                    </a>
                    <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank">
                        <img src="assets/img/front-pages/icons/instagram-light.png" alt="google icon"
                            data-app-light-img="front-pages/icons/instagram-light.png"
                            data-app-dark-img="front-pages/icons/instagram-dark.png" />
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer: End -->

    <script>
        // Check selected custom option
        window.Helpers.initCustomOptionCheck();
    </script>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/front-main.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('assets/js/front-page-landing.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/pages-auth-multisteps.js') }}"></script>
    </body>

    </html>
