 <!-- Sections:Start -->

 <div data-bs-spy="scroll" class="scrollspy-example">

     <!-- Hero: Start -->
        {{-- <section id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative">
                <div class="container" style="margin-left: -250px">
                    <div class="text-center hero-text-box" >
                        <h1 class="text-primary hero-title display-6 fw-bold">
                            ERP Innov </h1>
                        <h1 class="text-primary hero-title display-6 fw-bold">
                            La Gestion Intelligente à Portée de Main</h1>
                        <h2 class="pb-1 mb-4 hero-sub-title h6">
                            Simplifiez, Innovez, Prospérez <br class="d-none d-lg-block" />
                        </h2>
                        <div class="landing-hero-btn d-inline-block position-relative">
                            <span class="hero-btn-item position-absolute d-none d-md-flex text-heading">Rejoignez la communauté
                                <img src="assets/img/front-pages/icons/Join-community-arrow.png" alt="Join community arrow"
                                    class="scaleX-n1-rtl" /></span>
                            <a href="/login" class="btn btn-primary btn-lg" target="_blank">Je tester gratuitement</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="landing-hero-blank"></div>
        </section> --}}
    <!-- Hero: End -->

    <!-- Hero: Start -->
        <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
        <div class="container">
            <div class="row align-items-center">
                <!-- Texte à gauche -->
                <div class="col-md-6 text-center text-md-start hero-text-box">
                    <h1 class="text-primary hero-title display-6 fw-bold">ERP Innov</h1>
                    <h1 class="text-primary hero-title display-6 fw-bold">La Gestion Intelligente à Portée de Main</h1>
                    <h2 class="pb-1 mb-4 hero-sub-title h6">
                        Simplifiez, Innovez, Prospérez <br class="d-none d-lg-block" />
                    </h2>
                    <div class="landing-hero-btn d-inline-block position-relative"
                        >

                        <a href="/login" class="btn rounded-pill btn-primary btn-lg" target="_blank" style="margin-right: 15px;">Je teste gratuitement</a>

                        <a href="/login" class="btn rounded-pill btn-danger btn-lg custom-button" target="_blank">J'assiste à une démo</a>

                    </div>
                </div>

                <!-- Image à droite -->
                <div class="col-md-6 text-center"
                style=".hero-image {
                         border-radius: 15px;
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.9);
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                        transform: translateY(50px) rotate(20deg);
                    }
                        .hero-image:hover {
                        transform: translateY(-5px) scale(1.05) rotate(2deg);
                         box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
                    }
                         #landingHero {
                        position: relative;
                        overflow: hidden;
                    }

                    ">
                    <img src="assets/img/front-pages/landing-page/hero-elements-light1.jpg" alt="Hero Image" class="img-fluid hero-image" />

                </div>
            </div>
        </div>
        </div>
        </section>
    <!-- Hero: End -->

    <!-- Real customers reviews: Start -->
        <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
        <!-- What people say slider: Start -->
        <div class="container">
            <h3 class="mb-1 text-center">
                <span class="section-title">Découvrez</span>
                nos solutions sur mesure.
             </h3>
            <p class="pb-3 mb-4 text-center">
                Prêt à transformer votre gestion et booster votre croissance ? Parcourez nos offres et trouvez la solution idéale pour votre entreprise.
            </p>
          <div class="row align-items-center gx-0 gy-4 g-lg-5">
            <div class="col-md-6 col-lg-5 col-xl-3" style="margin-top: -90px">
              <div class="mb-3 pb-1">
                <span class="badge bg-label-primary">ERP INNOV</span>
              </div>
              <h3 class="mb-1"><span class="section-title"> vous bénéficiez :</span></h3>
              <p class="mb-3 mb-md-5">
                    <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                      ><i class="ti ti-check ti-xs"></i
                    ></span>
                    Des outils de gestion puissants et intuitifs. <br class="d-none d-xl-block" />

                    <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                      ><i class="ti ti-check ti-xs"></i
                    ></span>
                    Un accès à vos données partout et à tout moment.<br class="d-none d-xl-block" />

                    <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                      ><i class="ti ti-check ti-xs"></i
                    ></span>
                    Des formations pratiques pour développer votre entreprise.
              </p>
              <div class="landing-reviews-btns">
                <button
                  id="reviews-previous-btn"
                  class="btn btn-label-primary reviews-btn me-3 scaleX-n1-rtl"
                  type="button">
                  <i class="ti ti-chevron-left ti-sm"></i>
                </button>
                <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn scaleX-n1-rtl" type="button">
                  <i class="ti ti-chevron-right ti-sm"></i>
                </button>
              </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-9">
              <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                <div class="swiper" id="swiper-reviews">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          {{-- <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-1.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div> --}}
                          <div class="mb-3 pb-1">
                            <span class="badge bg-label-primary">Logo Client</span>
                          </div>
                          <p>
                            “ERP INNOV a complètement changé notre manière de gérer notre base de données. Le tableur était peu pratique à remplir et à exploiter. Avec ERP INNOV tout cela est fluide.”
                          </p>
                          <div class="text-warning mb-3">
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Henintsoa Andrianina</h6>
                              <p class="small text-muted mb-0">Developpeur</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          {{-- <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-2.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div> --}}
                          <div class="mb-3 pb-1">
                            <span class="badge bg-label-primary">Logo Client</span>
                          </div>
                          <p>
                            “ERP INNOV a changé ma vie ! Je l’utilise au quotidien pour suivre mes adhésions, enregistrer les participations des membres à des ateliers que nous organisons, émettre des reçus fiscaux.”
                          </p>
                          <div class="text-warning mb-3">
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Mampionona Naritiana</h6>
                              <p class="small text-muted mb-0">Fondateur entreprise</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          {{-- <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-3.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div> --}}
                          <div class="mb-3 pb-1">
                            <span class="badge bg-label-primary">Logo Client</span>
                          </div>
                          <p>
                            "Nous gagnons beaucoup de temps entre les équipes pour avoir des informations à jour sur nos communautés et surtout nous construisons grâce à ERP INNOV une stratégie basée sur la donnée.""
                          </p>
                          <div class="text-warning mb-3">
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                                <h6 class="mb-0">Henintsoa Andrianina</h6>
                                <p class="small text-muted mb-0">Developpeur</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          {{-- <div class="mb-3">
                            <img
                              src="../../assetss/img/front-pages/branding/logo-4.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div> --}}
                          <div class="mb-3 pb-1">
                            <span class="badge bg-label-primary">Logo Client</span>
                          </div>
                          <p>
                            "ERP INNOV répond parfaitement à nos besoins en tant qu’association. Notamment il permet de travailler à distance ce qui est un atout essentiel pour notre association qui compte des bénévoles répartis sur toute la M/car."
                          </p>
                          <div class="text-warning mb-3">
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star ti-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                                <h6 class="mb-0">Mampionona Naritiana</h6>
                                <p class="small text-muted mb-0">Fondateur entreprise</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          {{-- <div class="mb-3">
                            <img
                              src="../../assets/img/front-pages/branding/logo-5.png"
                              alt="client logo"
                              class="client-logo img-fluid" />
                          </div> --}}
                          <div class="mb-3 pb-1">
                            <span class="badge bg-label-primary">Logo Client</span>
                          </div>
                          <p>
                            “Très facile d’utilisation. Évite de ressaisir des quantités de données quand une personne est déjà enregistrée, contrairement à Excel. Plus de risque de perdre des données , de supprimer une ligne par erreur. Permet de faire des recherches et des statistiques facilement.”
                          </p>
                          <div class="text-warning mb-3">
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                            <i class="ti ti-star-filled ti-sm"></i>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="avatar me-2 avatar-sm">
                              <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Evans lamdah</h6>
                              <p class="small text-muted mb-0">Directeur General</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div> </br></br>

                  {{-- <a href="#" class="btn btn-primary" style="margin-left: 30%">
                    <span class="tf-icons ti ti-user scaleX-n1-rtl me-md-1"></span>
                    <span class="d-none d-md-block">voir toutes les faqs</span>
                </a> --}}
                  <a href="#" class="btn rounded-pill btn-danger btn-lg custom-button" target="_blank" style="margin-left: 20%">Tous les temoignages</a>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- What people say slider: End -->
        <hr class="m-0" />
        <!-- Logo slider: Start -->
        {{-- <div class="container">
          <div class="swiper-logo-carousel py-4 my-lg-2">
            <div class="swiper" id="swiper-clients-logos">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_1-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_1-light.png"
                    data-app-dark-img="front-pages/branding/logo_1-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_2-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_2-light.png"
                    data-app-dark-img="front-pages/branding/logo_2-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_3-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_3-light.png"
                    data-app-dark-img="front-pages/branding/logo_3-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_4-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_4-light.png"
                    data-app-dark-img="front-pages/branding/logo_4-dark.png" />
                </div>
                <div class="swiper-slide">
                  <img
                    src="../../assets/img/front-pages/branding/logo_5-light.png"
                    alt="client logo"
                    class="client-logo"
                    data-app-light-img="front-pages/branding/logo_5-light.png"
                    data-app-dark-img="front-pages/branding/logo_5-dark.png" />
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- Logo slider: End -->
        </section>
    <!-- Real customers reviews: End -->

    <!-- Pricing plans: Start -->
        <section id="landingPricing" class="section-py bg-body landing-pricing">
      <div class="container">
        <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Plan tarif</span>
        </div>
        <h3 class="mb-1 text-center"><span class="section-title">Plans tarifaires sur mesure</span></h3>
        <p class="pb-3 mb-4 text-center">
            ERP INNOV propose Dolibarr ERP CRM en ligne, avec un coût fixe, peu importe les applications utilisées.
        </p>
        <div class="text-center mb-5">
          <div class="position-relative d-inline-block pt-3 pt-md-0">
            <label class="switch switch-primary me-0">
                <span class="switch-label">Paiement mensuel</span>
              <input type="checkbox" class="switch-input price-duration-toggler" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Payer annuellement</span>
            </label>
            <div class="pricing-plans-item position-absolute d-flex">
              <img
                src="../../assets/img/front-pages/icons/pricing-plans-arrow.png"
                alt="pricing plans arrow"
                class="scaleX-n1-rtl" />
              {{-- <span class="fw-semibold mt-2 ms-1"> Save 25%</span> --}}
            </div>
          </div>
        </div>
        <div class="row gy-4 pt-lg-3">
          <!-- Basic Plan: Start -->
          <div class="col-xl-4 col-lg-6">
            <div class="card">
              <div class="card-header">
                <div class="text-center">
                  <img
                    src="../../assets/img/front-pages/icons/paper-airplane.png"
                    alt="paper airplane icon"
                    class="mb-4 pb-2" />
                  <h4 class="mb-1">Solo</h4>
                  <div class="d-flex align-items-center justify-content-center">
                    <span class="price-monthly h1 text-primary fw-bold mb-0">£ 5  </span>
                    <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">£ 4</span>
                    <sub class="h6 text-muted mb-0 ms-1">/mois</sub>
                  </div>
                  <div class="position-relative pt-2">
                    <div class="price-yearly text-muted price-yearly-toggle d-none">£ 48 / an</div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Tous les modules ERP INNOV sont activé
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Accessible depuis tout appareil connecté
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Doliassistant
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Nombre d'utilisateur limité
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Stockage limité
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Nombre de conversations chatbot limité
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Disponibilité 24/7
                    </h5>
                  </li>
                </ul>
                <div class="pt-3 mt-4 d-grid">
                    <a href="/login" target="_blank" class="btn btn-label-primary">Installer maintenant</a>
                </div>
                <br>
                <p>Test gratuit (30 jours ou plus, sans engagement)</p>
              </div>
            </div>
          </div>
          <!-- Basic Plan: End -->

          <!-- Favourite Plan: Start -->
          <div class="col-xl-4 col-lg-6">
            <div class="card border border-primary shadow-lg">
              <div class="card-header">
                <div class="text-center">
                  <img src="../../assets/img/front-pages/icons/plane.png" alt="plane icon" class="mb-4 pb-2" />
                  <h4 class="mb-1">Solo +</h4>
                  <div class="d-flex align-items-center justify-content-center">
                    <span class="price-monthly h1 text-primary fw-bold mb-0">£ 10</span>
                    <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">£ 9</span>
                    <sub class="h6 text-muted mb-0 ms-1">/mois</sub>
                  </div>
                  <div class="position-relative pt-2">
                    <div class="price-yearly text-muted price-yearly-toggle d-none">£ 108 / an</div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Tous les modules ERP INNOV sont activé
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Accessible depuis tout appareil connecté
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Doliassistant
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Nombre d'utilisateur limité
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Stockage limité
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Nombre des conversations chatbot limité
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Disponibilité 24/7
                    </h5>
                  </li>
                </ul>
                <div class="d-grid mt-4 pt-3">
                  <a href="/login" target="_blank" class="btn btn-primary">Installer maintenant</a>
                </div>
                <br>
                <p></p>
                {{-- <p> Test gratuit (30 jours ou plus, sans engagement)</p> --}}
              </div>
            </div>
          </div>
          <!-- Favourite Plan: End -->

          <!-- Standard Plan: Start -->
          <div class="col-xl-4 col-lg-6">
            <div class="card">
              <div class="card-header">
                <div class="text-center">
                  <img
                    src="../../assets/img/front-pages/icons/paper-airplane.png"
                    alt="paper airplane icon"
                    class="mb-4 pb-2" />
                  <h4 class="mb-1">Premium</h4>
                  <div class="d-flex align-items-center justify-content-center">
                    <span class="price-monthly h1 text-primary fw-bold mb-0">£ 15  </span>
                    <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">£ 13</span>
                    <sub class="h6 text-muted mb-0 ms-1">/mois</sub>
                  </div>
                  <div class="position-relative pt-2">
                    <div class="price-yearly text-muted price-yearly-toggle d-none">£ 156 / an</div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Tous les modules ERP INNOV sont activé
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Accessible depuis tout appareil connecté
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Doliassistant
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Nombre d'utilisateur illimité
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Stockage illimité
                    </h5>
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Nombre des conversations chatbot illimité
                  </li>
                  <li>
                    <h5>
                      <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="ti ti-check ti-xs"></i
                      ></span>
                      Disponibilité 24/7
                    </h5>
                  </li>
                </ul>
                <div class="pt-3 mt-4 d-grid">
                    <a href="/login" target="_blank" class="btn btn-label-primary">Installer maintenant</a>
                </div>
                <br>
                <p></p>
                {{-- <p>Test gratuit (30 jours ou plus, sans engagement)</p> --}}
              </div>
            </div>
          </div>
          <!-- Standard Plan: End -->
        </div>
      </div>
        </section>
    <!-- Pricing plans: End -->

    <!-- Useful features: Start -->
        <section id="landingFeatures" class="section-py bg-body landing-features">
            <div class="container">
              <div class="pb-1 mb-3 text-center">
                    <span class="badge bg-label-primary">Modules
                    </span>
                </div>
                <h3 class="mb-1 text-center">
                   <span class="section-title">Nos modules</span>
                pour simplifier votre gestion.
                </h3>
                <p class="pb-3 mb-3 text-center mb-md-5">
                    Des outils adaptés pour gagner du temps et répondre à vos besoins.
                </p>
                <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                    <div class="text-center col-lg-4 col-sm-6 features-icon-box">
                        <div class="mb-3 text-center">
                            <img src="assets/img/front-pages/icons/laptop.png" alt="laptop charging" />
                        </div>
                        <h4><a href="#">CRM et Ventes avancés</a></h4>
                        <p class="features-icon-description">
                            Le CRM vous aide à gérer vos clients de manière efficace et personnalisée.
                        </p>
                    </div>
                    <div class="text-center col-lg-4 col-sm-6 features-icon-box">
                        <div class="mb-3 text-center">
                            <img src="assets/img/front-pages/icons/rocket.png" alt="transition up" />
                        </div>
                        <h4><a href="#">Site web connecté</a></h4>
                        <p class="features-icon-description">
                            Boostez votre stratégie Marketing avec des outils performants.
                        </p>
                    </div>
                    <div class="text-center col-lg-4 col-sm-6 features-icon-box">
                        <div class="mb-3 text-center">
                            <img src="assets/img/front-pages/icons/paper.png" alt="edit" />
                        </div>
                        <h4><a href="#">Finance et Compta analytiques</a></h4>
                        <p class="features-icon-description">
                            Optimisez votre gestion financière, Paiements et Rapprochement bancaire.
                        </p>
                    </div>
                    <div class="text-center col-lg-4 col-sm-6 features-icon-box">
                        <div class="mb-3 text-center">
                            <img src="assets/img/front-pages/icons/check.png" alt="3d select solid" />
                        </div>
                        <h4><a href="#">Gestion de stock et logistique</a></h4>
                        <p class="features-icon-description">
                            Gérez efficacement vos Produits, Services, Stocks, Achats, et Expéditions.
                        </p>
                    </div>
                    <div class="text-center col-lg-4 col-sm-6 features-icon-box">
                        <div class="mb-3 text-center">
                            <img src="assets/img/front-pages/icons/user.png" alt="lifebelt" />
                        </div>
                        <h4><a href="#">Ressources Humaines</a></h4>
                        <p class="features-icon-description">Notre solution simplifie la gestion de vos RH avec des outils intuitifs.</p>
                    </div>
                    <div class="text-center col-lg-4 col-sm-6 features-icon-box">
                        <div class="mb-3 text-center">
                            <img src="assets/img/front-pages/icons/keyboard.png" alt="google docs" />
                        </div>
                        <h4><a href="#">Gestion de projets</a></h4>
                        <p class="features-icon-description">Améliorez votre Productivité en gérant efficacement Projets et Tâches.</p>
                    </div>
                </div>
            </div>
        </section>
    <!-- Useful features: End -->

    <!-- Fun facts: Start -->
        <section id="landingFunFacts" class="section-py landing-fun-facts">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-sm-6 col-lg-3">
                        <div class="border shadow-none card border-label-primary">
                            <div class="text-center card-body">
                                <img src="assets/img/front-pages/icons/laptop.png" alt="laptop" class="mb-2" />
                                <h5 class="mb-1 h2">24H</h5>
                                <p class="mb-0 fw-medium">
                                    Chat d’assistance <br />

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="border shadow-none card border-label-success">
                            <div class="text-center card-body">
                                <img src="assets/img/front-pages/icons/user-success.png" alt="laptop" class="mb-2" />
                                <h5 class="mb-1 h2">50k+</h5>
                                <p class="mb-0 fw-medium">
                                    Rejoigner nous<br />
                                    {{-- communauté --}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="border shadow-none card border-label-info">
                            <div class="text-center card-body">
                                <img src="assets/img/front-pages/icons/diamond-info.png" alt="laptop" class="mb-2" />
                                <h5 class="mb-1 h2">4.8/5</h5>
                                <p class="mb-0 fw-medium">
                                    Noté Produits
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="border shadow-none card border-label-warning">
                            <div class="text-center card-body">
                                <img src="assets/img/front-pages/icons/check-warning.png" alt="laptop" class="mb-2" />
                                <h5 class="mb-1 h2">30 jours</h5>
                                <p class="mb-0 fw-medium">
                                    Essai gratuit
                                         {{-- <br /> --}}
                                    {{-- sans engagement --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Fun facts: End -->

    <!-- FAQ: Start -->
        <section id="landingFAQ" class="section-py bg-body landing-faq">
            <div class="container">
                <div class="pb-1 mb-3 text-center">
                    <span class="badge bg-label-primary"></span>
                </div>
                <h3 class="mb-1 text-center">Questions techniques clients <span class="section-title"></span></h3>
                <p class="pb-3 mb-5 text-center">
                </p>
                <div class="row gy-5">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <img src="assets/img/front-pages/landing-page/boy-with-laptop-light.png" alt="faq boy with logos"
                                class="faq-image" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="accordion" id="accordionExample">
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                        Qu'est-ce qu'ERP INNOV ?
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        ERP INNOV est une suite d'outils de gestion d'entreprise simples et efficaces, conçue pour aider les entreprises de toutes tailles à optimiser leurs opérations et stimuler leur croissance.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                        Ai-je besoin d'une formation pour utiliser vos outils ?
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Non, nos outils sont conçus pour être intuitifs et faciles à utiliser. Cependant, nous proposons des formations axées sur le développement de votre entreprise plutôt que sur l'utilisation des outils.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionThree" aria-expanded="false"
                                        aria-controls="accordionThree">
                                        Vos solutions sont-elles accessibles sur mobile ?
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Oui, toutes nos solutions sont accessibles via une application mobile performante, disponible sur iOS et Android, ainsi que depuis n'importe quel navigateur web.

                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                        Comment fonctionne votre support client ?
                                    </button>
                                </h2>
                                <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Nous offrons un chatbot pour une assistance rapide et un système de ticketing pour les questions plus complexes, assurant ainsi un support réactif et efficace.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                        Puis-je personnaliser les outils selon mes besoins ?
                                    </button>
                                </h2>
                                <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Absolument, notre approche modulaire permet d'adapter nos solutions aux besoins spécifiques de chaque entreprise.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                        Quels types de formations proposez-vous ?
                                    </button>
                                </h2>
                                <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Nous offrons des formations en gestion d'entreprise, marketing, finance et développement commercial, disponibles en présentiel et en ligne.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <a href="/login" target="_blank" class="btn btn-lg btn-primary">Installer maintenant</a> --}}




                </div> </br></br>
                {{-- <a href="#" class="btn btn-primary" style="margin-left: 50%">
                    <span class="tf-icons ti ti-user scaleX-n1-rtl me-md-1"></span>
                    <span class="d-none d-md-block">voir toutes les faqs</span>
                </a> --}}
                <a href="#" class="btn rounded-pill btn-danger btn-lg custom-button"  style="margin-left: 40%">voir tous les faq</a>
            </div>
        </section>
    <!-- FAQ: End -->


    <!-- Popular Articles: Start -->
        <section id="landingActu" class="section-py">
            <div class="container">
              <h3 class="text-center mb-4"> Articles Populaires</h3>
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                      <div class="card border shadow-none">
                        <div class="card-body text-center">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.2">
                                  <path
                                    d="M9.0625 39.875V16.3125C9.0625 15.3511 9.44442 14.4291 10.1242 13.7492C10.8041 13.0694 11.7261 12.6875 12.6875 12.6875H45.3125C46.2739 12.6875 47.1959 13.0694 47.8758 13.7492C48.5556 14.4291 48.9375 15.3511 48.9375 16.3125V39.875H9.0625Z"
                                    fill="currentColor" />
                                  <path
                                    d="M9.0625 39.875V16.3125C9.0625 15.3511 9.44442 14.4291 10.1242 13.7492C10.8041 13.0694 11.7261 12.6875 12.6875 12.6875H45.3125C46.2739 12.6875 47.1959 13.0694 47.8758 13.7492C48.5556 14.4291 48.9375 15.3511 48.9375 16.3125V39.875H9.0625Z"
                                    fill="white"
                                    fill-opacity="0.2" />
                                </g>
                                <path
                                  d="M8.0625 39.875C8.0625 40.4273 8.51022 40.875 9.0625 40.875C9.61478 40.875 10.0625 40.4273 10.0625 39.875H8.0625ZM12.6875 12.6875L12.6875 11.6875L12.6875 12.6875ZM45.3125 12.6875V11.6875V12.6875ZM47.9375 39.875C47.9375 40.4273 48.3852 40.875 48.9375 40.875C49.4898 40.875 49.9375 40.4273 49.9375 39.875H47.9375ZM5.4375 39.875V38.875C4.88522 38.875 4.4375 39.3227 4.4375 39.875H5.4375ZM52.5625 39.875H53.5625C53.5625 39.3227 53.1148 38.875 52.5625 38.875V39.875ZM5.4375 43.5H4.4375H5.4375ZM32.625 20.9375C33.1773 20.9375 33.625 20.4898 33.625 19.9375C33.625 19.3852 33.1773 18.9375 32.625 18.9375V20.9375ZM25.375 18.9375C24.8227 18.9375 24.375 19.3852 24.375 19.9375C24.375 20.4898 24.8227 20.9375 25.375 20.9375V18.9375ZM10.0625 39.875V16.3125H8.0625V39.875H10.0625ZM10.0625 16.3125C10.0625 15.6163 10.3391 14.9486 10.8313 14.4563L9.41713 13.0421C8.54978 13.9095 8.0625 15.0859 8.0625 16.3125H10.0625ZM10.8313 14.4563C11.3236 13.9641 11.9913 13.6875 12.6875 13.6875L12.6875 11.6875C11.4609 11.6875 10.2845 12.1748 9.41713 13.0421L10.8313 14.4563ZM12.6875 13.6875H45.3125V11.6875H12.6875V13.6875ZM45.3125 13.6875C46.0087 13.6875 46.6764 13.9641 47.1687 14.4563L48.5829 13.0421C47.7155 12.1748 46.5391 11.6875 45.3125 11.6875V13.6875ZM47.1687 14.4563C47.6609 14.9486 47.9375 15.6163 47.9375 16.3125H49.9375C49.9375 15.0859 49.4502 13.9095 48.5829 13.0421L47.1687 14.4563ZM47.9375 16.3125V39.875H49.9375V16.3125H47.9375ZM5.4375 40.875H52.5625V38.875H5.4375V40.875ZM51.5625 39.875V43.5H53.5625V39.875H51.5625ZM51.5625 43.5C51.5625 44.1962 51.2859 44.8639 50.7937 45.3562L52.2079 46.7704C53.0752 45.903 53.5625 44.7266 53.5625 43.5H51.5625ZM50.7937 45.3562C50.3014 45.8484 49.6337 46.125 48.9375 46.125V48.125C50.1641 48.125 51.3405 47.6377 52.2079 46.7704L50.7937 45.3562ZM48.9375 46.125H9.0625V48.125H48.9375V46.125ZM9.0625 46.125C8.36631 46.125 7.69863 45.8484 7.20634 45.3562L5.79213 46.7704C6.65949 47.6377 7.83587 48.125 9.0625 48.125V46.125ZM7.20634 45.3562C6.71406 44.8639 6.4375 44.1962 6.4375 43.5H4.4375C4.4375 44.7266 4.92478 45.903 5.79213 46.7704L7.20634 45.3562ZM6.4375 43.5V39.875H4.4375V43.5H6.4375ZM32.625 18.9375H25.375V20.9375H32.625V18.9375Z"
                                  fill="currentColor" />
                                <path
                                  d="M8.0625 39.875C8.0625 40.4273 8.51022 40.875 9.0625 40.875C9.61478 40.875 10.0625 40.4273 10.0625 39.875H8.0625ZM12.6875 12.6875L12.6875 11.6875L12.6875 12.6875ZM45.3125 12.6875V11.6875V12.6875ZM47.9375 39.875C47.9375 40.4273 48.3852 40.875 48.9375 40.875C49.4898 40.875 49.9375 40.4273 49.9375 39.875H47.9375ZM5.4375 39.875V38.875C4.88522 38.875 4.4375 39.3227 4.4375 39.875H5.4375ZM52.5625 39.875H53.5625C53.5625 39.3227 53.1148 38.875 52.5625 38.875V39.875ZM5.4375 43.5H4.4375H5.4375ZM32.625 20.9375C33.1773 20.9375 33.625 20.4898 33.625 19.9375C33.625 19.3852 33.1773 18.9375 32.625 18.9375V20.9375ZM25.375 18.9375C24.8227 18.9375 24.375 19.3852 24.375 19.9375C24.375 20.4898 24.8227 20.9375 25.375 20.9375V18.9375ZM10.0625 39.875V16.3125H8.0625V39.875H10.0625ZM10.0625 16.3125C10.0625 15.6163 10.3391 14.9486 10.8313 14.4563L9.41713 13.0421C8.54978 13.9095 8.0625 15.0859 8.0625 16.3125H10.0625ZM10.8313 14.4563C11.3236 13.9641 11.9913 13.6875 12.6875 13.6875L12.6875 11.6875C11.4609 11.6875 10.2845 12.1748 9.41713 13.0421L10.8313 14.4563ZM12.6875 13.6875H45.3125V11.6875H12.6875V13.6875ZM45.3125 13.6875C46.0087 13.6875 46.6764 13.9641 47.1687 14.4563L48.5829 13.0421C47.7155 12.1748 46.5391 11.6875 45.3125 11.6875V13.6875ZM47.1687 14.4563C47.6609 14.9486 47.9375 15.6163 47.9375 16.3125H49.9375C49.9375 15.0859 49.4502 13.9095 48.5829 13.0421L47.1687 14.4563ZM47.9375 16.3125V39.875H49.9375V16.3125H47.9375ZM5.4375 40.875H52.5625V38.875H5.4375V40.875ZM51.5625 39.875V43.5H53.5625V39.875H51.5625ZM51.5625 43.5C51.5625 44.1962 51.2859 44.8639 50.7937 45.3562L52.2079 46.7704C53.0752 45.903 53.5625 44.7266 53.5625 43.5H51.5625ZM50.7937 45.3562C50.3014 45.8484 49.6337 46.125 48.9375 46.125V48.125C50.1641 48.125 51.3405 47.6377 52.2079 46.7704L50.7937 45.3562ZM48.9375 46.125H9.0625V48.125H48.9375V46.125ZM9.0625 46.125C8.36631 46.125 7.69863 45.8484 7.20634 45.3562L5.79213 46.7704C6.65949 47.6377 7.83587 48.125 9.0625 48.125V46.125ZM7.20634 45.3562C6.71406 44.8639 6.4375 44.1962 6.4375 43.5H4.4375C4.4375 44.7266 4.92478 45.903 5.79213 46.7704L7.20634 45.3562ZM6.4375 43.5V39.875H4.4375V43.5H6.4375ZM32.625 18.9375H25.375V20.9375H32.625V18.9375Z"
                                  fill="white"
                                  fill-opacity="0.2" />
                              </svg>

                          <h5 class="my-2">ERP INNOV V1</h5>
                          <p>Tous les modules fournis avec l'ERP INNOV sont disponibles.</p>
                          <a class="btn btn-sm btn-label-primary" href="help-center-article.html">En savoir plus</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 mb-md-0 mb-4">
                      <div class="card border shadow-none">
                        <div class="card-body text-center">
                          <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M32.2689 8.56722C31.7876 9.05354 31.3688 9.84814 31.029 10.8704C30.6946 11.8767 30.4652 13.0152 30.31 14.1032C30.1553 15.1872 30.0776 16.197 30.0386 16.9371C30.0358 16.991 30.0332 17.0434 30.0307 17.0943C30.0816 17.0918 30.134 17.0892 30.1879 17.0864C30.928 17.0475 31.9378 16.9697 33.0218 16.815C34.1098 16.6598 35.2483 16.4304 36.2546 16.096C37.2769 15.7562 38.0715 15.3374 38.5578 14.8561C39.3907 14.0223 39.8587 12.8919 39.8587 11.7133C39.8587 10.5339 39.3901 9.4028 38.5562 8.56883C37.7222 7.73487 36.5911 7.26636 35.4117 7.26636C34.2331 7.26636 33.1027 7.73427 32.2689 8.56722ZM39.2633 15.5649L39.9704 16.272C41.1794 15.0629 41.8587 13.4231 41.8587 11.7133C41.8587 10.0035 41.1794 8.36365 39.9704 7.15462C38.7614 5.94559 37.1216 5.26636 35.4117 5.26636C33.7019 5.26636 32.0621 5.94559 30.853 7.15461L30.8499 7.15774C30.0518 7.96296 29.5111 9.09639 29.1311 10.2396C29.0855 10.3767 29.0418 10.5154 28.9999 10.6551C28.958 10.5154 28.9143 10.3767 28.8688 10.2396C28.4888 9.09639 27.9481 7.96296 27.1499 7.15774L27.1468 7.15462C25.9378 5.94559 24.298 5.26636 22.5882 5.26636C20.8783 5.26636 19.2385 5.94559 18.0295 7.15462C16.8205 8.36366 16.1412 10.0035 16.1412 11.7133C16.1412 13.4231 16.8205 15.0629 18.0295 16.272L18.7366 15.5649L18.0326 16.2751C18.3589 16.5985 18.7391 16.8797 19.152 17.125H9.0625C7.5092 17.125 6.25 18.3842 6.25 19.9375V27.1875C6.25 28.7408 7.5092 30 9.0625 30H9.875V45.3125C9.875 46.0584 10.1713 46.7738 10.6988 47.3012C11.2262 47.8287 11.9416 48.125 12.6875 48.125H29H45.3125C46.0584 48.125 46.7738 47.8287 47.3012 47.3012C47.8287 46.7738 48.125 46.0584 48.125 45.3125V30H48.9375C50.4908 30 51.75 28.7408 51.75 27.1875V19.9375C51.75 18.3842 50.4908 17.125 48.9375 17.125H38.8479C39.2608 16.8797 39.641 16.5985 39.9673 16.2751L39.2633 15.5649ZM9.0625 19.125C8.61377 19.125 8.25 19.4888 8.25 19.9375V27.1875C8.25 27.6362 8.61377 28 9.0625 28H10.875H28V19.125H9.0625ZM30 19.125V28H47.125H48.9375C49.3862 28 49.75 27.6362 49.75 27.1875V19.9375C49.75 19.4888 49.3862 19.125 48.9375 19.125H30ZM28 30H11.875V45.3125C11.875 45.528 11.9606 45.7347 12.113 45.887C12.2653 46.0394 12.472 46.125 12.6875 46.125H28V30ZM30 46.125V30H46.125V45.3125C46.125 45.528 46.0394 45.7347 45.887 45.887C45.7347 46.0394 45.528 46.125 45.3125 46.125H30ZM21.7452 16.096C20.723 15.7562 19.9284 15.3374 19.4421 14.8562C18.6091 14.0223 18.1412 12.8919 18.1412 11.7133C18.1412 10.5339 18.6097 9.4028 19.4437 8.56883C20.2777 7.73487 21.4088 7.26636 22.5882 7.26636C23.7668 7.26636 24.8972 7.73428 25.731 8.56725C26.2123 9.05357 26.6311 9.84816 26.9708 10.8704C27.3053 11.8767 27.5346 13.0152 27.6899 14.1032C27.8445 15.1872 27.9223 16.197 27.9613 16.9371C27.9641 16.991 27.9667 17.0434 27.9691 17.0943C27.9183 17.0918 27.8659 17.0892 27.812 17.0864C27.0719 17.0475 26.0621 16.9697 24.978 16.815C23.89 16.6598 22.7516 16.4304 21.7452 16.096Z"
                              fill="currentColor" />
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M32.2689 8.56722C31.7876 9.05354 31.3688 9.84814 31.029 10.8704C30.6946 11.8767 30.4652 13.0152 30.31 14.1032C30.1553 15.1872 30.0776 16.197 30.0386 16.9371C30.0358 16.991 30.0332 17.0434 30.0307 17.0943C30.0816 17.0918 30.134 17.0892 30.1879 17.0864C30.928 17.0475 31.9378 16.9697 33.0218 16.815C34.1098 16.6598 35.2483 16.4304 36.2546 16.096C37.2769 15.7562 38.0715 15.3374 38.5578 14.8561C39.3907 14.0223 39.8587 12.8919 39.8587 11.7133C39.8587 10.5339 39.3901 9.4028 38.5562 8.56883C37.7222 7.73487 36.5911 7.26636 35.4117 7.26636C34.2331 7.26636 33.1027 7.73427 32.2689 8.56722ZM39.2633 15.5649L39.9704 16.272C41.1794 15.0629 41.8587 13.4231 41.8587 11.7133C41.8587 10.0035 41.1794 8.36365 39.9704 7.15462C38.7614 5.94559 37.1216 5.26636 35.4117 5.26636C33.7019 5.26636 32.0621 5.94559 30.853 7.15461L30.8499 7.15774C30.0518 7.96296 29.5111 9.09639 29.1311 10.2396C29.0855 10.3767 29.0418 10.5154 28.9999 10.6551C28.958 10.5154 28.9143 10.3767 28.8688 10.2396C28.4888 9.09639 27.9481 7.96296 27.1499 7.15774L27.1468 7.15462C25.9378 5.94559 24.298 5.26636 22.5882 5.26636C20.8783 5.26636 19.2385 5.94559 18.0295 7.15462C16.8205 8.36366 16.1412 10.0035 16.1412 11.7133C16.1412 13.4231 16.8205 15.0629 18.0295 16.272L18.7366 15.5649L18.0326 16.2751C18.3589 16.5985 18.7391 16.8797 19.152 17.125H9.0625C7.5092 17.125 6.25 18.3842 6.25 19.9375V27.1875C6.25 28.7408 7.5092 30 9.0625 30H9.875V45.3125C9.875 46.0584 10.1713 46.7738 10.6988 47.3012C11.2262 47.8287 11.9416 48.125 12.6875 48.125H29H45.3125C46.0584 48.125 46.7738 47.8287 47.3012 47.3012C47.8287 46.7738 48.125 46.0584 48.125 45.3125V30H48.9375C50.4908 30 51.75 28.7408 51.75 27.1875V19.9375C51.75 18.3842 50.4908 17.125 48.9375 17.125H38.8479C39.2608 16.8797 39.641 16.5985 39.9673 16.2751L39.2633 15.5649ZM9.0625 19.125C8.61377 19.125 8.25 19.4888 8.25 19.9375V27.1875C8.25 27.6362 8.61377 28 9.0625 28H10.875H28V19.125H9.0625ZM30 19.125V28H47.125H48.9375C49.3862 28 49.75 27.6362 49.75 27.1875V19.9375C49.75 19.4888 49.3862 19.125 48.9375 19.125H30ZM28 30H11.875V45.3125C11.875 45.528 11.9606 45.7347 12.113 45.887C12.2653 46.0394 12.472 46.125 12.6875 46.125H28V30ZM30 46.125V30H46.125V45.3125C46.125 45.528 46.0394 45.7347 45.887 45.887C45.7347 46.0394 45.528 46.125 45.3125 46.125H30ZM21.7452 16.096C20.723 15.7562 19.9284 15.3374 19.4421 14.8562C18.6091 14.0223 18.1412 12.8919 18.1412 11.7133C18.1412 10.5339 18.6097 9.4028 19.4437 8.56883C20.2777 7.73487 21.4088 7.26636 22.5882 7.26636C23.7668 7.26636 24.8972 7.73428 25.731 8.56725C26.2123 9.05357 26.6311 9.84816 26.9708 10.8704C27.3053 11.8767 27.5346 13.0152 27.6899 14.1032C27.8445 15.1872 27.9223 16.197 27.9613 16.9371C27.9641 16.991 27.9667 17.0434 27.9691 17.0943C27.9183 17.0918 27.8659 17.0892 27.812 17.0864C27.0719 17.0475 26.0621 16.9697 24.978 16.815C23.89 16.6598 22.7516 16.4304 21.7452 16.096Z"
                              fill="white"
                              fill-opacity="0.2" />
                            <g opacity="0.2">
                              <path
                                d="M47.125 29V45.3125C47.125 45.7932 46.934 46.2542 46.5941 46.5941C46.2542 46.934 45.7932 47.125 45.3125 47.125H12.6875C12.2068 47.125 11.7458 46.934 11.4059 46.5941C11.066 46.2542 10.875 45.7932 10.875 45.3125V29H47.125Z"
                                fill="currentColor" />
                              <path
                                d="M47.125 29V45.3125C47.125 45.7932 46.934 46.2542 46.5941 46.5941C46.2542 46.934 45.7932 47.125 45.3125 47.125H12.6875C12.2068 47.125 11.7458 46.934 11.4059 46.5941C11.066 46.2542 10.875 45.7932 10.875 45.3125V29H47.125Z"
                                fill="white"
                                fill-opacity="0.2" />
                            </g>
                          </svg>

                          <h5 class="my-2">ERP CRM 18</h5>
                          <p>La version 18.0 de Dolibarr est disponible dans DoliCloud .</p>
                          <a class="btn btn-sm btn-label-primary" href="#">En savoir plus</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card border shadow-none">
                        <div class="card-body text-center">
                          <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.2">
                              <path
                                d="M50.6367 12.6875H7.36328C6.2997 12.6875 5.4375 13.5497 5.4375 14.6133V43.3867C5.4375 44.4503 6.2997 45.3125 7.36328 45.3125H50.6367C51.7003 45.3125 52.5625 44.4503 52.5625 43.3867V14.6133C52.5625 13.5497 51.7003 12.6875 50.6367 12.6875Z"
                                fill="currentColor" />
                              <path
                                d="M50.6367 12.6875H7.36328C6.2997 12.6875 5.4375 13.5497 5.4375 14.6133V43.3867C5.4375 44.4503 6.2997 45.3125 7.36328 45.3125H50.6367C51.7003 45.3125 52.5625 44.4503 52.5625 43.3867V14.6133C52.5625 13.5497 51.7003 12.6875 50.6367 12.6875Z"
                                fill="white"
                                fill-opacity="0.2" />
                            </g>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M6.6875 14.6133C6.6875 14.2401 6.99006 13.9375 7.36328 13.9375H50.6367C51.0099 13.9375 51.3125 14.2401 51.3125 14.6133V43.3867C51.3125 43.7599 51.0099 44.0625 50.6367 44.0625H7.36328C6.99006 44.0625 6.6875 43.7599 6.6875 43.3867V14.6133ZM7.36328 11.4375C5.60935 11.4375 4.1875 12.8593 4.1875 14.6133V43.3867C4.1875 45.1407 5.60935 46.5625 7.36328 46.5625H50.6367C52.3907 46.5625 53.8125 45.1407 53.8125 43.3867V14.6133C53.8125 12.8593 52.3907 11.4375 50.6367 11.4375H7.36328ZM12.6875 20.75C12.1352 20.75 11.6875 21.1977 11.6875 21.75C11.6875 22.3023 12.1352 22.75 12.6875 22.75H45.3125C45.8648 22.75 46.3125 22.3023 46.3125 21.75C46.3125 21.1977 45.8648 20.75 45.3125 20.75H12.6875ZM12.6875 28C12.1352 28 11.6875 28.4477 11.6875 29C11.6875 29.5523 12.1352 30 12.6875 30H45.3125C45.8648 30 46.3125 29.5523 46.3125 29C46.3125 28.4477 45.8648 28 45.3125 28H12.6875ZM11.6875 36.25C11.6875 35.6977 12.1352 35.25 12.6875 35.25H14.5C15.0523 35.25 15.5 35.6977 15.5 36.25C15.5 36.8023 15.0523 37.25 14.5 37.25H12.6875C12.1352 37.25 11.6875 36.8023 11.6875 36.25ZM21.75 35.25C21.1977 35.25 20.75 35.6977 20.75 36.25C20.75 36.8023 21.1977 37.25 21.75 37.25H36.25C36.8023 37.25 37.25 36.8023 37.25 36.25C37.25 35.6977 36.8023 35.25 36.25 35.25H21.75ZM42.5 36.25C42.5 35.6977 42.9477 35.25 43.5 35.25H45.3125C45.8648 35.25 46.3125 35.6977 46.3125 36.25C46.3125 36.8023 45.8648 37.25 45.3125 37.25H43.5C42.9477 37.25 42.5 36.8023 42.5 36.25Z"
                              fill="currentColor" />
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M6.6875 14.6133C6.6875 14.2401 6.99006 13.9375 7.36328 13.9375H50.6367C51.0099 13.9375 51.3125 14.2401 51.3125 14.6133V43.3867C51.3125 43.7599 51.0099 44.0625 50.6367 44.0625H7.36328C6.99006 44.0625 6.6875 43.7599 6.6875 43.3867V14.6133ZM7.36328 11.4375C5.60935 11.4375 4.1875 12.8593 4.1875 14.6133V43.3867C4.1875 45.1407 5.60935 46.5625 7.36328 46.5625H50.6367C52.3907 46.5625 53.8125 45.1407 53.8125 43.3867V14.6133C53.8125 12.8593 52.3907 11.4375 50.6367 11.4375H7.36328ZM12.6875 20.75C12.1352 20.75 11.6875 21.1977 11.6875 21.75C11.6875 22.3023 12.1352 22.75 12.6875 22.75H45.3125C45.8648 22.75 46.3125 22.3023 46.3125 21.75C46.3125 21.1977 45.8648 20.75 45.3125 20.75H12.6875ZM12.6875 28C12.1352 28 11.6875 28.4477 11.6875 29C11.6875 29.5523 12.1352 30 12.6875 30H45.3125C45.8648 30 46.3125 29.5523 46.3125 29C46.3125 28.4477 45.8648 28 45.3125 28H12.6875ZM11.6875 36.25C11.6875 35.6977 12.1352 35.25 12.6875 35.25H14.5C15.0523 35.25 15.5 35.6977 15.5 36.25C15.5 36.8023 15.0523 37.25 14.5 37.25H12.6875C12.1352 37.25 11.6875 36.8023 11.6875 36.25ZM21.75 35.25C21.1977 35.25 20.75 35.6977 20.75 36.25C20.75 36.8023 21.1977 37.25 21.75 37.25H36.25C36.8023 37.25 37.25 36.8023 37.25 36.25C37.25 35.6977 36.8023 35.25 36.25 35.25H21.75ZM42.5 36.25C42.5 35.6977 42.9477 35.25 43.5 35.25H45.3125C45.8648 35.25 46.3125 35.6977 46.3125 36.25C46.3125 36.8023 45.8648 37.25 45.3125 37.25H43.5C42.9477 37.25 42.5 36.8023 42.5 36.25Z"
                              fill="white"
                              fill-opacity="0.2" />
                          </svg>

                          <h5 class="my-2">DoliAssistant</h5>
                          <p>Bénéficier d'une aide ou d'une assistance pour Dolibarr.</p>
                          <a class="btn btn-sm btn-label-primary" href="help-center-article.html">En savoir plus</a>
                        </div>
                      </div>
                    </div>
                  </div></br></br>


                </div>

                <div class="col-lg-10 mx-auto">
                    <div class="row">
                      <div class="col-md-4 mb-md-0 mb-4">
                        <div class="card border shadow-none">
                          <div class="card-body text-center">
                              <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g opacity="0.2">
                                    <path
                                      d="M9.0625 39.875V16.3125C9.0625 15.3511 9.44442 14.4291 10.1242 13.7492C10.8041 13.0694 11.7261 12.6875 12.6875 12.6875H45.3125C46.2739 12.6875 47.1959 13.0694 47.8758 13.7492C48.5556 14.4291 48.9375 15.3511 48.9375 16.3125V39.875H9.0625Z"
                                      fill="currentColor" />
                                    <path
                                      d="M9.0625 39.875V16.3125C9.0625 15.3511 9.44442 14.4291 10.1242 13.7492C10.8041 13.0694 11.7261 12.6875 12.6875 12.6875H45.3125C46.2739 12.6875 47.1959 13.0694 47.8758 13.7492C48.5556 14.4291 48.9375 15.3511 48.9375 16.3125V39.875H9.0625Z"
                                      fill="white"
                                      fill-opacity="0.2" />
                                  </g>
                                  <path
                                    d="M8.0625 39.875C8.0625 40.4273 8.51022 40.875 9.0625 40.875C9.61478 40.875 10.0625 40.4273 10.0625 39.875H8.0625ZM12.6875 12.6875L12.6875 11.6875L12.6875 12.6875ZM45.3125 12.6875V11.6875V12.6875ZM47.9375 39.875C47.9375 40.4273 48.3852 40.875 48.9375 40.875C49.4898 40.875 49.9375 40.4273 49.9375 39.875H47.9375ZM5.4375 39.875V38.875C4.88522 38.875 4.4375 39.3227 4.4375 39.875H5.4375ZM52.5625 39.875H53.5625C53.5625 39.3227 53.1148 38.875 52.5625 38.875V39.875ZM5.4375 43.5H4.4375H5.4375ZM32.625 20.9375C33.1773 20.9375 33.625 20.4898 33.625 19.9375C33.625 19.3852 33.1773 18.9375 32.625 18.9375V20.9375ZM25.375 18.9375C24.8227 18.9375 24.375 19.3852 24.375 19.9375C24.375 20.4898 24.8227 20.9375 25.375 20.9375V18.9375ZM10.0625 39.875V16.3125H8.0625V39.875H10.0625ZM10.0625 16.3125C10.0625 15.6163 10.3391 14.9486 10.8313 14.4563L9.41713 13.0421C8.54978 13.9095 8.0625 15.0859 8.0625 16.3125H10.0625ZM10.8313 14.4563C11.3236 13.9641 11.9913 13.6875 12.6875 13.6875L12.6875 11.6875C11.4609 11.6875 10.2845 12.1748 9.41713 13.0421L10.8313 14.4563ZM12.6875 13.6875H45.3125V11.6875H12.6875V13.6875ZM45.3125 13.6875C46.0087 13.6875 46.6764 13.9641 47.1687 14.4563L48.5829 13.0421C47.7155 12.1748 46.5391 11.6875 45.3125 11.6875V13.6875ZM47.1687 14.4563C47.6609 14.9486 47.9375 15.6163 47.9375 16.3125H49.9375C49.9375 15.0859 49.4502 13.9095 48.5829 13.0421L47.1687 14.4563ZM47.9375 16.3125V39.875H49.9375V16.3125H47.9375ZM5.4375 40.875H52.5625V38.875H5.4375V40.875ZM51.5625 39.875V43.5H53.5625V39.875H51.5625ZM51.5625 43.5C51.5625 44.1962 51.2859 44.8639 50.7937 45.3562L52.2079 46.7704C53.0752 45.903 53.5625 44.7266 53.5625 43.5H51.5625ZM50.7937 45.3562C50.3014 45.8484 49.6337 46.125 48.9375 46.125V48.125C50.1641 48.125 51.3405 47.6377 52.2079 46.7704L50.7937 45.3562ZM48.9375 46.125H9.0625V48.125H48.9375V46.125ZM9.0625 46.125C8.36631 46.125 7.69863 45.8484 7.20634 45.3562L5.79213 46.7704C6.65949 47.6377 7.83587 48.125 9.0625 48.125V46.125ZM7.20634 45.3562C6.71406 44.8639 6.4375 44.1962 6.4375 43.5H4.4375C4.4375 44.7266 4.92478 45.903 5.79213 46.7704L7.20634 45.3562ZM6.4375 43.5V39.875H4.4375V43.5H6.4375ZM32.625 18.9375H25.375V20.9375H32.625V18.9375Z"
                                    fill="currentColor" />
                                  <path
                                    d="M8.0625 39.875C8.0625 40.4273 8.51022 40.875 9.0625 40.875C9.61478 40.875 10.0625 40.4273 10.0625 39.875H8.0625ZM12.6875 12.6875L12.6875 11.6875L12.6875 12.6875ZM45.3125 12.6875V11.6875V12.6875ZM47.9375 39.875C47.9375 40.4273 48.3852 40.875 48.9375 40.875C49.4898 40.875 49.9375 40.4273 49.9375 39.875H47.9375ZM5.4375 39.875V38.875C4.88522 38.875 4.4375 39.3227 4.4375 39.875H5.4375ZM52.5625 39.875H53.5625C53.5625 39.3227 53.1148 38.875 52.5625 38.875V39.875ZM5.4375 43.5H4.4375H5.4375ZM32.625 20.9375C33.1773 20.9375 33.625 20.4898 33.625 19.9375C33.625 19.3852 33.1773 18.9375 32.625 18.9375V20.9375ZM25.375 18.9375C24.8227 18.9375 24.375 19.3852 24.375 19.9375C24.375 20.4898 24.8227 20.9375 25.375 20.9375V18.9375ZM10.0625 39.875V16.3125H8.0625V39.875H10.0625ZM10.0625 16.3125C10.0625 15.6163 10.3391 14.9486 10.8313 14.4563L9.41713 13.0421C8.54978 13.9095 8.0625 15.0859 8.0625 16.3125H10.0625ZM10.8313 14.4563C11.3236 13.9641 11.9913 13.6875 12.6875 13.6875L12.6875 11.6875C11.4609 11.6875 10.2845 12.1748 9.41713 13.0421L10.8313 14.4563ZM12.6875 13.6875H45.3125V11.6875H12.6875V13.6875ZM45.3125 13.6875C46.0087 13.6875 46.6764 13.9641 47.1687 14.4563L48.5829 13.0421C47.7155 12.1748 46.5391 11.6875 45.3125 11.6875V13.6875ZM47.1687 14.4563C47.6609 14.9486 47.9375 15.6163 47.9375 16.3125H49.9375C49.9375 15.0859 49.4502 13.9095 48.5829 13.0421L47.1687 14.4563ZM47.9375 16.3125V39.875H49.9375V16.3125H47.9375ZM5.4375 40.875H52.5625V38.875H5.4375V40.875ZM51.5625 39.875V43.5H53.5625V39.875H51.5625ZM51.5625 43.5C51.5625 44.1962 51.2859 44.8639 50.7937 45.3562L52.2079 46.7704C53.0752 45.903 53.5625 44.7266 53.5625 43.5H51.5625ZM50.7937 45.3562C50.3014 45.8484 49.6337 46.125 48.9375 46.125V48.125C50.1641 48.125 51.3405 47.6377 52.2079 46.7704L50.7937 45.3562ZM48.9375 46.125H9.0625V48.125H48.9375V46.125ZM9.0625 46.125C8.36631 46.125 7.69863 45.8484 7.20634 45.3562L5.79213 46.7704C6.65949 47.6377 7.83587 48.125 9.0625 48.125V46.125ZM7.20634 45.3562C6.71406 44.8639 6.4375 44.1962 6.4375 43.5H4.4375C4.4375 44.7266 4.92478 45.903 5.79213 46.7704L7.20634 45.3562ZM6.4375 43.5V39.875H4.4375V43.5H6.4375ZM32.625 18.9375H25.375V20.9375H32.625V18.9375Z"
                                    fill="white"
                                    fill-opacity="0.2" />
                                </svg>

                            <h5 class="my-2">Dolibar 17</h5>
                            <p>Tous les modules fournis avec la version Dolibarr sont disponibles.</p>
                            <a class="btn btn-sm btn-label-primary" href="help-center-article.html">En savoir plus</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 mb-md-0 mb-4">
                        <div class="card border shadow-none">
                          <div class="card-body text-center">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.2">
                                  <path
                                    d="M17.8304 37.8359C15.6726 36.1581 13.925 34.0112 12.7199 31.5579C11.5148 29.1045 10.8839 26.4091 10.8749 23.6757C10.8296 13.8429 18.7367 5.66403 28.5695 5.43747C32.375 5.34725 36.1123 6.45746 39.2514 8.61062C42.3904 10.7638 44.7719 13.8506 46.0581 17.4333C47.3442 21.016 47.4698 24.9127 46.4169 28.5707C45.364 32.2288 43.1861 35.4625 40.1921 37.8132C39.5308 38.3245 38.995 38.9802 38.6259 39.7302C38.2568 40.4802 38.0641 41.3047 38.0624 42.1406V43.5C38.0624 43.9807 37.8715 44.4417 37.5316 44.7816C37.1917 45.1215 36.7307 45.3125 36.2499 45.3125H21.7499C21.2692 45.3125 20.8082 45.1215 20.4683 44.7816C20.1284 44.4417 19.9374 43.9807 19.9374 43.5V42.1406C19.9318 41.3109 19.7394 40.4932 19.3747 39.748C19.0099 39.0029 18.4821 38.3493 17.8304 37.8359V37.8359Z"
                                    fill="currentColor" />
                                  <path
                                    d="M17.8304 37.8359C15.6726 36.1581 13.925 34.0112 12.7199 31.5579C11.5148 29.1045 10.8839 26.4091 10.8749 23.6757C10.8296 13.8429 18.7367 5.66403 28.5695 5.43747C32.375 5.34725 36.1123 6.45746 39.2514 8.61062C42.3904 10.7638 44.7719 13.8506 46.0581 17.4333C47.3442 21.016 47.4698 24.9127 46.4169 28.5707C45.364 32.2288 43.1861 35.4625 40.1921 37.8132C39.5308 38.3245 38.995 38.9802 38.6259 39.7302C38.2568 40.4802 38.0641 41.3047 38.0624 42.1406V43.5C38.0624 43.9807 37.8715 44.4417 37.5316 44.7816C37.1917 45.1215 36.7307 45.3125 36.2499 45.3125H21.7499C21.2692 45.3125 20.8082 45.1215 20.4683 44.7816C20.1284 44.4417 19.9374 43.9807 19.9374 43.5V42.1406C19.9318 41.3109 19.7394 40.4932 19.3747 39.748C19.0099 39.0029 18.4821 38.3493 17.8304 37.8359V37.8359Z"
                                    fill="white"
                                    fill-opacity="0.2" />
                                </g>
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M38.6857 9.43527C35.7198 7.4009 32.1887 6.35195 28.5932 6.43719L28.5925 6.4372C28.3515 6.44275 28.1116 6.45338 27.8731 6.46896L28.5464 4.43773C32.5617 4.34269 36.5049 5.51414 39.817 7.78597C43.1293 10.0579 45.6422 13.3151 46.9993 17.0954C48.3564 20.8758 48.4889 24.9875 47.3779 28.8473C46.2669 32.7072 43.9688 36.1193 40.8097 38.5998L40.8037 38.6045L40.8037 38.6044C40.263 39.0224 39.8249 39.5585 39.5232 40.1717C39.2215 40.7847 39.0639 41.4585 39.0625 42.1416V42.1425V43.5C39.0625 44.2459 38.7661 44.9613 38.2387 45.4887C37.7112 46.0161 36.9959 46.3125 36.25 46.3125H21.75C21.004 46.3125 20.2887 46.0161 19.7612 45.4887C19.2338 44.9613 18.9375 44.2459 18.9375 43.5V42.1441C18.9323 41.4657 18.7748 40.7971 18.4765 40.1877C18.1781 39.5781 17.7466 39.0434 17.2138 38.6231L17.8866 36.5936C18.069 36.7483 18.255 36.8993 18.4442 37.0465L17.8304 37.836L18.4492 37.0504C19.2189 37.6567 19.8421 38.4284 20.2729 39.3084C20.7036 40.1884 20.9307 41.154 20.9374 42.1338L20.9375 42.1406L20.9375 43.5C20.9375 43.7155 21.0231 43.9221 21.1754 44.0745C21.3278 44.2269 21.5345 44.3125 21.75 44.3125H36.25C36.4654 44.3125 36.6721 44.2269 36.8245 44.0745C36.9768 43.9221 37.0625 43.7155 37.0625 43.5V42.1406V42.1387C37.0644 41.1503 37.2923 40.1754 37.7287 39.2886C38.1646 38.4029 38.7969 37.6285 39.5775 37.0244C42.4048 34.8035 44.4614 31.7492 45.4559 28.2941C46.4507 24.8379 46.3321 21.1562 45.1169 17.7712C43.9017 14.3862 41.6516 11.4696 38.6857 9.43527ZM17.8865 36.5936L17.8866 36.5936L27.8731 6.46896L27.8724 6.469L28.5458 4.43775C18.1651 4.67729 9.8275 13.3058 9.87496 23.6797C9.88451 26.5645 10.5504 29.4094 11.8223 31.9987C13.0938 34.5872 14.9375 36.8525 17.2138 38.6231L17.8865 36.5936ZM17.8865 36.5936C16.1041 35.0827 14.6499 33.2189 13.6175 31.117C12.4793 28.7998 11.8834 26.254 11.8749 23.6725L11.8749 23.6711C11.8332 14.6214 18.9246 7.05389 27.8724 6.469L17.8865 36.5936ZM18.9376 52.5625C18.9376 52.0102 19.3853 51.5625 19.9376 51.5625H38.0626C38.6149 51.5625 39.0626 52.0102 39.0626 52.5625C39.0626 53.1148 38.6149 53.5625 38.0626 53.5625H19.9376C19.3853 53.5625 18.9376 53.1148 18.9376 52.5625ZM31.0024 11.8828C30.4579 11.7905 29.9416 12.1571 29.8493 12.7016C29.757 13.2461 30.1236 13.7624 30.6681 13.8547C32.6793 14.1956 34.535 15.1524 35.9792 16.5929C37.4235 18.0334 38.385 19.8867 38.731 21.897C38.8247 22.4413 39.3419 22.8066 39.8862 22.7129C40.4304 22.6192 40.7957 22.102 40.702 21.5577C40.2857 19.1394 39.129 16.9098 37.3916 15.1769C35.6543 13.4439 33.4218 12.293 31.0024 11.8828Z"
                                  fill="currentColor" />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M38.6857 9.43527C35.7198 7.4009 32.1887 6.35195 28.5932 6.43719L28.5925 6.4372C28.3515 6.44275 28.1116 6.45338 27.8731 6.46896L28.5464 4.43773C32.5617 4.34269 36.5049 5.51414 39.817 7.78597C43.1293 10.0579 45.6422 13.3151 46.9993 17.0954C48.3564 20.8758 48.4889 24.9875 47.3779 28.8473C46.2669 32.7072 43.9688 36.1193 40.8097 38.5998L40.8037 38.6045L40.8037 38.6044C40.263 39.0224 39.8249 39.5585 39.5232 40.1717C39.2215 40.7847 39.0639 41.4585 39.0625 42.1416V42.1425V43.5C39.0625 44.2459 38.7661 44.9613 38.2387 45.4887C37.7112 46.0161 36.9959 46.3125 36.25 46.3125H21.75C21.004 46.3125 20.2887 46.0161 19.7612 45.4887C19.2338 44.9613 18.9375 44.2459 18.9375 43.5V42.1441C18.9323 41.4657 18.7748 40.7971 18.4765 40.1877C18.1781 39.5781 17.7466 39.0434 17.2138 38.6231L17.8866 36.5936C18.069 36.7483 18.255 36.8993 18.4442 37.0465L17.8304 37.836L18.4492 37.0504C19.2189 37.6567 19.8421 38.4284 20.2729 39.3084C20.7036 40.1884 20.9307 41.154 20.9374 42.1338L20.9375 42.1406L20.9375 43.5C20.9375 43.7155 21.0231 43.9221 21.1754 44.0745C21.3278 44.2269 21.5345 44.3125 21.75 44.3125H36.25C36.4654 44.3125 36.6721 44.2269 36.8245 44.0745C36.9768 43.9221 37.0625 43.7155 37.0625 43.5V42.1406V42.1387C37.0644 41.1503 37.2923 40.1754 37.7287 39.2886C38.1646 38.4029 38.7969 37.6285 39.5775 37.0244C42.4048 34.8035 44.4614 31.7492 45.4559 28.2941C46.4507 24.8379 46.3321 21.1562 45.1169 17.7712C43.9017 14.3862 41.6516 11.4696 38.6857 9.43527ZM17.8865 36.5936L17.8866 36.5936L27.8731 6.46896L27.8724 6.469L28.5458 4.43775C18.1651 4.67729 9.8275 13.3058 9.87496 23.6797C9.88451 26.5645 10.5504 29.4094 11.8223 31.9987C13.0938 34.5872 14.9375 36.8525 17.2138 38.6231L17.8865 36.5936ZM17.8865 36.5936C16.1041 35.0827 14.6499 33.2189 13.6175 31.117C12.4793 28.7998 11.8834 26.254 11.8749 23.6725L11.8749 23.6711C11.8332 14.6214 18.9246 7.05389 27.8724 6.469L17.8865 36.5936ZM18.9376 52.5625C18.9376 52.0102 19.3853 51.5625 19.9376 51.5625H38.0626C38.6149 51.5625 39.0626 52.0102 39.0626 52.5625C39.0626 53.1148 38.6149 53.5625 38.0626 53.5625H19.9376C19.3853 53.5625 18.9376 53.1148 18.9376 52.5625ZM31.0024 11.8828C30.4579 11.7905 29.9416 12.1571 29.8493 12.7016C29.757 13.2461 30.1236 13.7624 30.6681 13.8547C32.6793 14.1956 34.535 15.1524 35.9792 16.5929C37.4235 18.0334 38.385 19.8867 38.731 21.897C38.8247 22.4413 39.3419 22.8066 39.8862 22.7129C40.4304 22.6192 40.7957 22.102 40.702 21.5577C40.2857 19.1394 39.129 16.9098 37.3916 15.1769C35.6543 13.4439 33.4218 12.293 31.0024 11.8828Z"
                                  fill="white"
                                  fill-opacity="0.2" />
                              </svg>

                            <h5 class="my-2">ERP CRM 16</h5>
                            <p>La version 18.0 de Dolibarr est disponible dans DoliCloud .</p>
                            <a class="btn btn-sm btn-label-primary" href="#">En savoir plus</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card border shadow-none">
                          <div class="card-body text-center">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.2">
                                  <path
                                    d="M22.8829 41.2571L20.1415 46.6946C19.9651 47.0654 19.6651 47.3632 19.293 47.5369C18.9209 47.7105 18.4999 47.7491 18.1024 47.6462C12.5517 46.2868 7.74854 43.9305 4.25947 40.8946C3.99643 40.6625 3.80541 40.3599 3.70904 40.0226C3.61267 39.6853 3.61499 39.3275 3.71572 38.9915L11.3962 13.3446C11.4709 13.0821 11.6062 12.8409 11.7912 12.6402C11.9761 12.4395 12.2055 12.285 12.461 12.1891C14.631 11.2989 16.875 10.6014 19.1673 10.1047C19.6078 10.0083 20.0684 10.0774 20.4612 10.2988C20.854 10.5203 21.1515 10.8787 21.297 11.3055L23.0868 16.7204C27.0103 16.1766 30.9899 16.1766 34.9134 16.7204V16.7204L36.7032 11.3055C36.8487 10.8787 37.1462 10.5203 37.539 10.2988C37.9318 10.0774 38.3924 10.0083 38.8329 10.1047C41.1252 10.6014 43.3692 11.2989 45.5392 12.1891C45.7947 12.285 46.0241 12.4395 46.209 12.6402C46.394 12.8409 46.5293 13.0821 46.604 13.3446L54.2845 38.9915C54.3852 39.3275 54.3875 39.6853 54.2912 40.0226C54.1948 40.3599 54.0038 40.6625 53.7407 40.8946C50.2517 43.9305 45.4485 46.2868 39.8978 47.6462C39.5003 47.7491 39.0793 47.7105 38.7072 47.5369C38.3351 47.3632 38.0351 47.0654 37.8587 46.6946L35.1173 41.2571C33.0907 41.5421 31.0467 41.6859 29.0001 41.6876C26.9535 41.6859 24.9095 41.5421 22.8829 41.2571V41.2571Z"
                                    fill="currentColor" />
                                  <path
                                    d="M22.8829 41.2571L20.1415 46.6946C19.9651 47.0654 19.6651 47.3632 19.293 47.5369C18.9209 47.7105 18.4999 47.7491 18.1024 47.6462C12.5517 46.2868 7.74854 43.9305 4.25947 40.8946C3.99643 40.6625 3.80541 40.3599 3.70904 40.0226C3.61267 39.6853 3.61499 39.3275 3.71572 38.9915L11.3962 13.3446C11.4709 13.0821 11.6062 12.8409 11.7912 12.6402C11.9761 12.4395 12.2055 12.285 12.461 12.1891C14.631 11.2989 16.875 10.6014 19.1673 10.1047C19.6078 10.0083 20.0684 10.0774 20.4612 10.2988C20.854 10.5203 21.1515 10.8787 21.297 11.3055L23.0868 16.7204C27.0103 16.1766 30.9899 16.1766 34.9134 16.7204V16.7204L36.7032 11.3055C36.8487 10.8787 37.1462 10.5203 37.539 10.2988C37.9318 10.0774 38.3924 10.0083 38.8329 10.1047C41.1252 10.6014 43.3692 11.2989 45.5392 12.1891C45.7947 12.285 46.0241 12.4395 46.209 12.6402C46.394 12.8409 46.5293 13.0821 46.604 13.3446L54.2845 38.9915C54.3852 39.3275 54.3875 39.6853 54.2912 40.0226C54.1948 40.3599 54.0038 40.6625 53.7407 40.8946C50.2517 43.9305 45.4485 46.2868 39.8978 47.6462C39.5003 47.7491 39.0793 47.7105 38.7072 47.5369C38.3351 47.3632 38.0351 47.0654 37.8587 46.6946L35.1173 41.2571C33.0907 41.5421 31.0467 41.6859 29.0001 41.6876C26.9535 41.6859 24.9095 41.5421 22.8829 41.2571V41.2571Z"
                                    fill="white"
                                    fill-opacity="0.2" />
                                </g>
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M24.4688 32.625C24.4688 34.1265 23.2515 35.3438 21.75 35.3438C20.2485 35.3438 19.0312 34.1265 19.0312 32.625C19.0312 31.1235 20.2485 29.9062 21.75 29.9062C23.2515 29.9062 24.4688 31.1235 24.4688 32.625ZM38.9688 32.625C38.9688 34.1265 37.7515 35.3438 36.25 35.3438C34.7485 35.3438 33.5312 34.1265 33.5312 32.625C33.5312 31.1235 34.7485 29.9062 36.25 29.9062C37.7515 29.9062 38.9688 31.1235 38.9688 32.625Z"
                                  fill="currentColor" />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M24.4688 32.625C24.4688 34.1265 23.2515 35.3438 21.75 35.3438C20.2485 35.3438 19.0312 34.1265 19.0312 32.625C19.0312 31.1235 20.2485 29.9062 21.75 29.9062C23.2515 29.9062 24.4688 31.1235 24.4688 32.625ZM38.9688 32.625C38.9688 34.1265 37.7515 35.3438 36.25 35.3438C34.7485 35.3438 33.5312 34.1265 33.5312 32.625C33.5312 31.1235 34.7485 29.9062 36.25 29.9062C37.7515 29.9062 38.9688 31.1235 38.9688 32.625Z"
                                  fill="white"
                                  fill-opacity="0.2" />
                                <path
                                  d="M16.8563 18.1251C20.7855 16.8936 24.8826 16.2821 29.0001 16.3126C33.1176 16.2821 37.2147 16.8936 41.1439 18.1251M41.1439 39.8751C37.2147 41.1065 33.1176 41.718 29.0001 41.6876C24.8826 41.718 20.7855 41.1065 16.8563 39.8751M35.1173 41.2571L37.8587 46.6946C38.0351 47.0654 38.3351 47.3632 38.7072 47.5368C39.0793 47.7105 39.5003 47.7491 39.8978 47.6462C45.4485 46.2868 50.2517 43.9305 53.7407 40.8946C54.0038 40.6625 54.1948 40.3599 54.2912 40.0226C54.3875 39.6853 54.3852 39.3275 54.2845 38.9915L46.604 13.3446C46.5293 13.0821 46.394 12.8409 46.209 12.6402C46.0241 12.4395 45.7947 12.285 45.5392 12.1891C43.3692 11.2989 41.1252 10.6014 38.8329 10.1047C38.3924 10.0083 37.9318 10.0774 37.539 10.2988C37.1462 10.5203 36.8487 10.8787 36.7032 11.3055L34.9134 16.7204M22.8829 41.2571L20.1415 46.6946C19.9651 47.0654 19.6651 47.3632 19.293 47.5368C18.9209 47.7105 18.4999 47.7491 18.1024 47.6462C12.5517 46.2868 7.74854 43.9305 4.25947 40.8946C3.99643 40.6625 3.80541 40.3599 3.70904 40.0226C3.61267 39.6853 3.61499 39.3275 3.71572 38.9915L11.3962 13.3446C11.4709 13.0821 11.6062 12.8409 11.7912 12.6402C11.9761 12.4395 12.2055 12.285 12.461 12.1891C14.631 11.2989 16.875 10.6014 19.1673 10.1047C19.6078 10.0083 20.0684 10.0774 20.4612 10.2988C20.854 10.5203 21.1515 10.8787 21.297 11.3055L23.0868 16.7204"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                                <path
                                  d="M16.8563 18.1251C20.7855 16.8936 24.8826 16.2821 29.0001 16.3126C33.1176 16.2821 37.2147 16.8936 41.1439 18.1251M41.1439 39.8751C37.2147 41.1065 33.1176 41.718 29.0001 41.6876C24.8826 41.718 20.7855 41.1065 16.8563 39.8751M35.1173 41.2571L37.8587 46.6946C38.0351 47.0654 38.3351 47.3632 38.7072 47.5368C39.0793 47.7105 39.5003 47.7491 39.8978 47.6462C45.4485 46.2868 50.2517 43.9305 53.7407 40.8946C54.0038 40.6625 54.1948 40.3599 54.2912 40.0226C54.3875 39.6853 54.3852 39.3275 54.2845 38.9915L46.604 13.3446C46.5293 13.0821 46.394 12.8409 46.209 12.6402C46.0241 12.4395 45.7947 12.285 45.5392 12.1891C43.3692 11.2989 41.1252 10.6014 38.8329 10.1047C38.3924 10.0083 37.9318 10.0774 37.539 10.2988C37.1462 10.5203 36.8487 10.8787 36.7032 11.3055L34.9134 16.7204M22.8829 41.2571L20.1415 46.6946C19.9651 47.0654 19.6651 47.3632 19.293 47.5368C18.9209 47.7105 18.4999 47.7491 18.1024 47.6462C12.5517 46.2868 7.74854 43.9305 4.25947 40.8946C3.99643 40.6625 3.80541 40.3599 3.70904 40.0226C3.61267 39.6853 3.61499 39.3275 3.71572 38.9915L11.3962 13.3446C11.4709 13.0821 11.6062 12.8409 11.7912 12.6402C11.9761 12.4395 12.2055 12.285 12.461 12.1891C14.631 11.2989 16.875 10.6014 19.1673 10.1047C19.6078 10.0083 20.0684 10.0774 20.4612 10.2988C20.854 10.5203 21.1515 10.8787 21.297 11.3055L23.0868 16.7204"
                                  stroke="white"
                                  stroke-opacity="0.2"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round" />
                              </svg>

                            <h5 class="my-2">ERP INNOV V2</h5>
                            <p>Bénéficier d'une aide ou d'une assistance pour Dolibarr.</p>
                            <a class="btn btn-sm btn-label-primary" href="help-center-article.html">En savoir plus</a>
                          </div>
                        </div>
                      </div>
                    </div></br></br>

                    <a href="#" class="btn rounded-pill btn-danger btn-lg custom-button"  style="margin-left: 40%">voir tous les articles</a>
                  </div>
              </div>
            </div>
        </section>
    <!-- Popular Articles: End -->


    <!-- Contact Us: Start -->
        <section id="landingContact" class="section-py bg-body landing-contact">
            <div class="container">
                <div class="pb-1 mb-3 text-center">
                    <hspan class="badge bg-label-primary"></hspan>
                </div>
                <h3 class="mb-1 text-center"><span class="section-title">CONTACT</span> </h3>
                <p class="mb-4 text-center mb-lg-5 pb-md-3">Une question ou une remarque ? Écrivez-nous simplement un message</p>
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="p-2 border contact-img-box position-relative h-100">
                            <img src="assets/img/front-pages/landing-page/contact-customer-service.png"
                                alt="contact customer service" class="contact-img w-100 scaleX-n1-rtl" />

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-1">Envoyer message</h4>
                                <p class="mb-4">
                                    Recevez les dernières nouvelles, conseils exclusifs et offres spéciales ,<br
                                        class="d-none d-lg-block" />directement dans votre boîte mail.
                                    .
                                </p>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-form-fullname">Nom</label>
                                            <input type="text" class="form-control" id="contact-form-fullname"
                                                placeholder="" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-form-email">Email</label>
                                            <input type="text" id="contact-form-email" class="form-control"
                                                placeholder="" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="contact-form-message">Message</label>
                                            <textarea id="contact-form-message" class="form-control" rows="8"
                                                placeholder="votre message"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                                              <label class="form-check-label" for="terms-conditions">
                                                Je souhaite recevoir la lettre d’information
                                                {{-- <a href="javascript:void(0);">privacy policy & terms</a> --}}
                                              </label>
                                            </div>
                                          </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Envoyer une demande</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Contact Us: End -->
  </div>

  <!-- / Sections:End -->

