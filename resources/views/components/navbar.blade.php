<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Empêcher le défilement horizontal */
        }

        .layout-navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: #fff; /* Couleur de fond de la barre de navigation */
            border-bottom: 1px solid #ddd; /* Bordure pour la séparation */
        }

        .content {
            padding-top: 80px; /* Ajuster la valeur en fonction de la hauteur de votre barre de navigation */
        }
    </style>
</head>
<body>

    <!-- Navbar: Start -->
    <nav class="py-0 shadow-none layout-navbar">
        <div class="container">
            <div class="px-3 navbar navbar-expand-lg landing-navbar px-md-4">
                <!-- Menu logo wrapper: Start -->
                <div class="py-0 navbar-brand app-brand demo d-flex py-lg-2 me-4">
                    <!-- Mobile menu toggle: Start-->
                    <button class="px-0 border-0 navbar-toggler me-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="align-middle ti ti-menu-2 ti-sm"></i>
                    </button>
                    <!-- Mobile menu toggle: End-->
                    <a href="landing-page.html" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bold ms-1 ps-1" style="font-size: 1.5rem">ERPINNOV.COM</span>
                    </a>
                </div>
                <!-- Menu logo wrapper: End -->
                <!-- Menu wrapper: Start -->
                <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                    <button class="top-0 border-0 navbar-toggler text-heading position-absolute end-0 scaleX-n1-rtl"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-x ti-sm"></i>
                    </button>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-medium" aria-current="page" href="#landingHero ">Acceuil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#landingPricing">Tarif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#landingFAQ">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="#landingContact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="landing-menu-overlay d-lg-none"></div>
                <!-- Menu wrapper: End -->
                <!-- Toolbar: Start -->
                <ul class="flex-row navbar-nav align-items-center ms-auto">
                    <!-- Style Switcher -->
                    <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="ti ti-sm"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                    <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                    <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                    <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- / Style Switcher-->

                    <!-- navbar button: Start -->
                    <li>
                        <a href="/login" class="btn btn-primary">
                            <span class="tf-icons ti ti-user scaleX-n1-rtl me-md-1"></span>
                            <span class="d-none d-md-block">Votre Espace Client</span>
                        </a>
                    </li>
                    <!-- navbar button: End -->
                </ul>
                <!-- Toolbar: End -->
            </div>
        </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Content -->


    <!-- Bootstrap JS and dependencies -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
