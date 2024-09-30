<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <!-- View sales -->
      <div class="col-xl-4 mb-4 col-lg-5 col-12">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-7">
              <div class="card-body text-nowrap">
                <h5 class="card-title mb-0">Nom Client/Entreprise! 🎉</h5>
                <p class="mb-2">nom instance</p>
                <small class="text-muted">dernier connexion 30 minutes</small>
                <h4 class="text-primary mb-1"></h4>
                {{-- <a href="javascript:;" class="btn btn-primary data-bs-toggle="modal" data-bs-target="#createApp">Action</a> --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#twoFactorAuth">
                    Action
                  </button>
              </div>
            </div>
            {{-- <div class="col-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="../../assets/img/illustrations/card-advance-sale.png"
                  height="140"
                  alt="view sales" />
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      <!-- View sales -->

      <!-- Statistics -->
      <div class="col-xl-8 mb-4 col-lg-7 col-12">
        <div class="card h-100">
          <div class="card-header">
            <div class="d-flex justify-content-between mb-3">
              <h5 class="card-title mb-0">Informations Générales</h5>
              {{-- <small class="text-muted">Updated 1 month ago</small> --}}
            </div>
          </div>
          <div class="card-body">
            <div class="row gy-3">
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="badge rounded-pill bg-label-primary me-3 p-2">
                    <i class="ti ti-chart-pie-2 ti-sm"></i>
                  </div>
                  <div class="card-info">
                    <h5 class="mb-0">20 </h5>
                    <small>Instance</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="badge rounded-pill bg-label-info me-3 p-2">
                    <i class="ti ti-users ti-sm"></i>
                  </div>
                  <div class="card-info">
                    <h5 class="mb-0">20 GO</h5>
                    <small>Stockage</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="badge rounded-pill bg-label-danger me-3 p-2">
                    <i class="ti ti-shopping-cart ti-sm"></i>
                  </div>
                  <div class="card-info">
                    <h5 class="mb-0">2</h5>
                    <small>CRM/RH</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="badge rounded-pill bg-label-success me-3 p-2">
                    <i class="ti ti-currency-dollar ti-sm"></i>
                  </div>
                  <div class="card-info">
                    <h5 class="mb-0">50£</h5>
                    <small>Revenue</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Statistics -->


      <!-- Sales by Countries tabs-->
      <div class="col-md-6 col-xl-4 col-xl-4 mb-4">
        <div class="card h-100">
          <div class="card-header d-flex justify-content-between pb-2 mb-1">
            <div class="card-title mb-1">
              <h5 class="m-0 me-2">Plus d'informations</h5>
              <small class="text-muted">Voir ici plus d'informations concernant ce client</small>
            </div>
            <div class="dropdown">
              <button
                class="btn p-0"
                type="button"
                id="salesByCountryTabs"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountryTabs">
                {{-- <a class="dropdown-item" href="javascript:void(0);">Download</a>
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a> --}}
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="nav-align-top">
              <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link active"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#navs-justified-new"
                    aria-controls="navs-justified-new"
                    aria-selected="true">
                    Générales
                  </button>
                </li>
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#navs-justified-link-preparing"
                    aria-controls="navs-justified-link-preparing"
                    aria-selected="false">
                    Historiques
                  </button>
                </li>
                <li class="nav-item">
                  <button
                    type="button"
                    class="nav-link"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#navs-justified-link-shipping"
                    aria-controls="navs-justified-link-shipping"
                    aria-selected="false">
                    Notifications
                   <span  style="margin-left: 120px" class="badge bg-danger badge-notifications">1</span>
                  </button>
                </li>
              </ul>
              <div class="tab-content pb-0">

                <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-shadow ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Gasikara</h6>
                                <small class="text-muted">Nom de client/Entreprise</small>
                              </div>

                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-globe ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">gasikara@d7.com</h6>
                                <small class="text-muted">Nom d'instance</small>
                              </div>

                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-mail ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">gasikara@gmail.com</h6>
                                <small class="text-muted">Mail client</small>
                              </div>

                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-external-link ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0"><div class="ms-3 badge bg-label-success">Abonné </div></h6>
                                <small class="text-muted">Statut de l'abonnement</small>
                              </div>

                            </div>
                          </div>
                        </li>
                        <li class="mb-3 pb-1">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-discount-2 ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">20/30/2024</h6>
                                <small class="text-muted">Date de création de l'instance</small>
                              </div>

                            </div>
                          </div>
                        </li>
                        <li class="mb-2">
                          <div class="d-flex align-items-start">
                            <div class="badge bg-label-secondary p-2 me-3 rounded">
                              <i class="ti ti-star ti-sm"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">20/30/2024</h6>
                                <small class="text-muted">Date d'expiration de l'abonnement </small>
                              </div>

                            </div>
                          </div>
                        </li>
                      </ul>
                </div>

                <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
                  <ul class="timeline timeline-advance mb-2 pb-1">

                    <li class="timeline-item ps-4 border-left-dashed">
                      <span class="timeline-indicator timeline-indicator-success">
                        <i class="ti ti-circle-check"></i>
                      </span>
                      <div class="timeline-event ps-0 pb-0">
                        <div class="timeline-header">
                          <small class="text-success text-uppercase fw-medium">Connexion</small>
                        </div>
                        <h6 class="mb-0">Connexion avec l'instance</h6>
                        <p class="text-muted mb-0 text-nowrap">il y a 3 min</p>
                      </div>
                    </li>


                    <li class="timeline-item ps-4 border-transparent">
                      <span class="timeline-indicator timeline-indicator-primary">
                        <i class="ti ti-map-pin"></i>
                      </span>
                      <div class="timeline-event ps-0 pb-0">
                        <div class="timeline-header">
                          <small class="text-primary text-uppercase fw-medium">ajout de modules</small>
                        </div>
                        <h6 class="mb-0">ajout de modules CRM</h6>
                        <p class="text-muted mb-0 text-nowrap">il y a 30min</p>
                      </div>
                    </li>

                    <li class="timeline-item ps-4 border-transparent">
                        <span class="timeline-indicator timeline-indicator-primary">
                          <i class="ti ti-map-pin"></i>
                        </span>
                        <div class="timeline-event ps-0 pb-0">
                          <div class="timeline-header">
                            <small class="text-primary text-uppercase fw-medium">ajout de modules</small>
                          </div>
                          <h6 class="mb-0">ajout de modules RH</h6>
                          <p class="text-muted mb-0 text-nowrap">il y a 50 min</p>
                        </div>
                      </li>
                  </ul>

                </div>

                <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">

                    <div class="table-responsive">
                        <table class="table table-borderless border-top">
                          <tbody>
                            <tr>
                              <td class="pt-2">
                                <div class="d-flex justify-content-start align-items-center mt-lg-4">

                                  <div class="d-flex flex-column">
                                    <h6 class="mb-0">Rappels d’expiration d'essai </h6>
                                    {{-- <small class="text-truncate text-muted">Business Intelligence</small> --}}
                                  </div>
                                </div>
                              </td>
                              <td class="text-end pt-2">
                                <div class="user-progress mt-lg-4">
                                  <p class="badge badge-center rounded-pill bg-danger bg-glow">1</p>
                                </div>
                              </td>
                            </tr>

                            <tr>
                                <td class="pt-2">
                                  <div class="d-flex justify-content-start align-items-center mt-lg-4">

                                    <div class="d-flex flex-column">
                                      <h6 class="mb-0">Alertes de paiement échoué </h6>
                                      {{-- <small class="text-truncate text-muted">Business Intelligence</small> --}}
                                    </div>
                                  </div>
                                </td>
                                <td class="text-end pt-2">
                                  <div class="user-progress mt-lg-4">
                                    <p class="badge badge-center rounded-pill bg-secondary bg-glow">0</p>
                                  </div>
                                </td>
                              </tr>

                              <tr>
                                <td class="pt-2">
                                  <div class="d-flex justify-content-start align-items-center mt-lg-4">

                                    <div class="d-flex flex-column">
                                      <h6 class="mb-0">Rappels de renouvellement </h6>
                                      {{-- <small class="text-truncate text-muted">Business Intelligence</small> --}}
                                    </div>
                                  </div>
                                </td>
                                <td class="text-end pt-2">
                                  <div class="user-progress mt-lg-4">
                                    <p class="badge badge-center rounded-pill bg-secondary bg-glow">0</p>
                                  </div>
                                </td>
                              </tr>

                          </tbody>
                        </table>
                      </div>




                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Sales by Countries tabs -->


      <!-- Invoice table -->
      <div class="col-xl-8">
        <div class="card">
          <div class="table-responsive card-datatable">
            <div class="card-header flex-column flex-md-row">
                <div class="text-center head-label">
                    <h5 class="mb-0 card-title" style="margin-left: -450px">Liste des factures</h5>
                </div>
                <div class="pt-6 dt-action-buttons text-end pt-md-0" style="margin-top: -30px">
                    <div class="flex-wrap dt-buttons btn-group">

                        {{-- <div class="mb-1 pb-1">
                            <label for="select2Basic" class="form-label">Filtrer par etat</label>

                            </div> --}}

                            <select
                            id="select2Basic"
                            class="form-select form-select-lg share-project-select"
                            data-allow-clear="true"
                            style="width: 45%;  margin-right: 10px; margin-left:-30px">
                            {{-- <option data-name="Adelaide Nichols" selected></option> --}}
                            <option data-name="Julian Murphy" selected>2024</option>
                            <option data-name="Sophie Gilbert">2023</option>
                            <option data-name="Julian Murphy">2022</option>
                            <option data-name="Sophie Gilbert">2021</option>
                        </select>




                        <div class="btn-group">
                            <button
                                class="border-none btn btn-secondary buttons-collection btn-label-primary me-4 waves-effect waves-light"
                                type="button"><span><i class="ti ti-file-export ti-xs me-sm-1"></i> <span
                                        class="d-none d-sm-inline-block">Export</span></span>
                            </button>
                        </div>

{{--
                        <button class="btn btn-secondary create-new btn-primary waves-effect waves-light"
                            tabindex="0" data-bs-toggle="modal" data-bs-target="#createApp">
                            <span>
                                <i class="ti ti-plus me-sm-1"></i>
                                <span class="d-none d-sm-inline-block">Nouvel abonnement</span>
                            </span>
                        </button> --}}
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <table class="table datatable-invoice border-top">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Mois</th>
                  {{-- <th><i class="ti ti-trending-up text-secondary"></i></th> --}}
                  <th>Montant </th>
                  <th>Statut</th>
                  <th>Mode de paiement</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <tr class="odd">
                    <td>1</td>
                    <td>Janvier</td>
                    <td>
                      500.000
                    </td>
                    <td>
                        <span class="badge bg-label-success">
                            Payée
                        </span>
                    </td>
                    <td>Carte bancaire</td>
                    <td>


                        <a href="{{ route('facture.detail') }}">
                            <button
                                    class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit">
                                <i class="ti ti-eye ti-md" title="Voir le détail"></i>
                            </button>
                        </a>


                        <div class="d-inline-block">
                            <a href="javascript:;"
                                class="btn btn-sm btn-text-secondary rounded-pill btn-icon hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical ti-md"></i>
                            </a>
                            <ul class="m-0 dropdown-menu dropdown-menu-end">
                                <li><a href="#"
                                        class="dropdown-item">Details</a></li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a href="javascript:;"

                                        class="dropdown-item text-danger delete-record">Supprimer</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

                <tr class="odd">
                    <td>2</td>
                    <td>Fevrier</td>
                    <td>
                      500.000
                    </td>
                    <td>
                        <span class="badge bg-label-success">
                            Payée
                        </span>
                    </td>
                    <td>virement</td>
                    <td>


                        <a href="{{ route('abonnement.detail') }}">
                            <button
                                    class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit">
                                <i class="ti ti-eye ti-md" title="Voir le détail"></i>
                            </button>
                        </a>


                        <div class="d-inline-block">
                            <a href="javascript:;"
                                class="btn btn-sm btn-text-secondary rounded-pill btn-icon hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical ti-md"></i>
                            </a>
                            <ul class="m-0 dropdown-menu dropdown-menu-end">
                                <li><a href="#"
                                        class="dropdown-item">Details</a></li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a href="javascript:;"

                                        class="dropdown-item text-danger delete-record">Supprimer</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

                <tr class="odd">
                    <td>3</td>
                    <td>Mars</td>
                    <td>
                      500.000
                    </td>
                    <td>
                        <span class="badge bg-label-warning">
                            En attente
                        </span>
                    </td>
                    <td>Mobile Money</td>
                    <td>


                        <a href="{{ route('abonnement.detail') }}">
                            <button
                                    class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit">
                                <i class="ti ti-eye ti-md" title="Voir le détail"></i>
                            </button>
                        </a>


                        <div class="d-inline-block">
                            <a href="javascript:;"
                                class="btn btn-sm btn-text-secondary rounded-pill btn-icon hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical ti-md"></i>
                            </a>
                            <ul class="m-0 dropdown-menu dropdown-menu-end">
                                <li><a href="#"
                                        class="dropdown-item">Details</a></li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a href="javascript:;"

                                        class="dropdown-item text-danger delete-record">Supprimer</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

                <tr class="odd">
                    <td>4</td>
                    <td>Avril</td>
                    <td>
                      400.000
                    </td>
                    <td>
                        <span class="badge bg-label-danger">
                            Échouée
                        </span>
                    </td>
                    <td>Carte bancaire</td>
                    <td>


                        <a href="{{ route('abonnement.detail') }}">
                            <button
                                    class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit">
                                <i class="ti ti-eye ti-md" title="Voir le détail"></i>
                            </button>
                        </a>


                        <div class="d-inline-block">
                            <a href="javascript:;"
                                class="btn btn-sm btn-text-secondary rounded-pill btn-icon hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical ti-md"></i>
                            </a>
                            <ul class="m-0 dropdown-menu dropdown-menu-end">
                                <li><a href="#"
                                        class="dropdown-item">Details</a></li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a href="javascript:;"

                                        class="dropdown-item text-danger delete-record">Supprimer</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

                <tr class="odd">
                    <td>5</td>
                    <td>Mai</td>
                    <td>
                      500.000
                    </td>
                    <td>
                        <span class="badge bg-label-success">
                            Payée
                        </span>
                    </td>
                    <td>Carte bancaire</td>
                    <td>


                        <a href="{{ route('abonnement.detail') }}">
                            <button
                                    class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit">
                                <i class="ti ti-eye ti-md" title="Voir le détail"></i>
                            </button>
                        </a>


                        <div class="d-inline-block">
                            <a href="javascript:;"
                                class="btn btn-sm btn-text-secondary rounded-pill btn-icon hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical ti-md"></i>
                            </a>
                            <ul class="m-0 dropdown-menu dropdown-menu-end">
                                <li><a href="#"
                                        class="dropdown-item">Details</a></li>
                                <div class="dropdown-divider"></div>
                                <li>
                                    <a href="javascript:;"

                                        class="dropdown-item text-danger delete-record">Supprimer</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>


            </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /Invoice table -->
    </div>

    @include('livewire.admin.modal.action-abonnement')
  </div>
  <!-- / Content -->

  @push('scripts')
  <script src="{{ asset('assets/js/modal-create-app.js') }}"></script>
@endpush
