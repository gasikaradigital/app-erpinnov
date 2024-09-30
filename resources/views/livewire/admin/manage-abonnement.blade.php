
<div>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

    <div class="mb-4 row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Abonnements actifs</span>
                            <div class="my-2 d-flex align-items-center">
                                <h3 class="mb-0 me-2">1000</h3>
                                <!-- <p class="mb-0 text-success">(+29%)</p> -->
                            </div>
                            <p class="mb-0"> Nombre total d'abonnés payants actifs</p>
                        </div>
                        <div class="avatar">
                            <span class="rounded avatar-initial bg-label-primary">
                                <i class="ti ti-user ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Taux de désabonnement</span>
                            <div class="my-2 d-flex align-items-center">
                                <h3 class="mb-0 me-2">10 %</h3>
                                <!-- <p class="mb-0 text-success">(+18%)</p> -->
                            </div>
                            <p class="mb-0">Taux de clients se désabonnant</p>
                        </div>
                        <div class="avatar">
                            <span class="rounded avatar-initial bg-label-danger">
                                <i class="ti ti-user-plus ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Essai-Abonnement</span>
                            <div class="my-2 d-flex align-items-center">
                                <h3 class="mb-0 me-2">80%</h3>
                                <!-- <p class="mb-0 text-danger">(-14%)</p> -->
                            </div>
                            <p class="mb-0">Taux de conversion Essai-Abonnement</p>
                        </div>
                        <div class="avatar">
                            <span class="rounded avatar-initial bg-label-success">
                                <i class="ti ti-user-check ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Client en période d'essai</span>
                            <div class="my-2 d-flex align-items-center">
                                <h3 class="mb-0 me-2">100</h3>
                                <!-- <p class="mb-0 text-success">(+42%)</p> -->
                            </div>
                            <p class="mb-0">Nombre de client en période d'essai</p>
                        </div>
                        <div class="avatar">
                            <span class="rounded avatar-initial bg-label-warning">
                                <i class="ti ti-user-exclamation ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Users List Table -->
        <div class="card">
            <div class="pt-0 card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header flex-column flex-md-row">
                        <div class="text-center head-label">
                            <h5 class="mb-0 card-title">Gestion des abonnements</h5>
                        </div>
                        <div class="pt-6 dt-action-buttons text-end pt-md-0">
                            <div class="flex-wrap dt-buttons btn-group">
                                <div class="btn-group">
                                    <button
                                        class="border-none btn btn-secondary buttons-collection btn-label-primary me-4 waves-effect waves-light"
                                        type="button"><span><i class="ti ti-file-export ti-xs me-sm-1"></i> <span
                                                class="d-none d-sm-inline-block">Export</span></span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button
                                        class="border-none btn btn-primary buttons-collection btn-label-primary me-4 waves-effect waves-light"
                                        type="button" data-bs-toggle="modal" data-bs-target="#addNewAddress">
                                        <span><i class="ti ti-filter ti-xs me-sm-1"></i>
                                           <span
                                                class="d-none d-sm-inline-block">Filtrer</span>
                                        </span>
                                    </button>

                                    <!-- <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#addNewAddress">
                                        Show
                                    </button> -->
                                </div>

                                <button class="btn btn-secondary create-new btn-primary waves-effect waves-light"
                                    tabindex="0" data-bs-toggle="modal" data-bs-target="#createApp">
                                    <span>
                                        <i class="ti ti-plus me-sm-1"></i>
                                        <span class="d-none d-sm-inline-block">Nouvel abonnement</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <table class="table no-footer dtr-column" style="width: 1214px;">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nom du client</th>
                                <th>Nom d'instance</th>
                                <th>Adresse e-mail </th>
                                <th>Date de création</th>
                                <th>Jours</th>
                                <th>status</th>
                                <th>Etat</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="odd">
                                <td>1</td>
                                <td>GASIKARA</td>
                                <td>
                                   gasikara@d7.com
                                </td>
                                <td>gasikara@gmail.com</td>
                                <td>20/09/2023</td>
                                <td>
                                    <span class="badge badge-center bg-label-primary">26</span>
                                </td>
                                <td>
                                    <span class="badge bg-label-success">
                                        abonné
                                    </span>
                                </td>
                                <td>
                                    <!-- <span class="badge bg-label-info">
                                        Activé
                                    </span> -->
                                    <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" id="confirm-color">Activé</button>
                                </td>
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
                                <td>2</td>
                                <td>HENINTSOA</td>
                                <td>
                                   henintsoa@d8.com
                                </td>
                                <td>henintsoa@gmail.com</td>
                                <td>20/08/2024</td>
                                <td>
                                    <span class="badge badge-center bg-label-primary">26</span>
                                </td>
                                <td>
                                    <span class="badge bg-label-secondary">
                                    Essai
                                    </span>
                                </td>
                                <td>
                                <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" id="confirm-color">Activé</button>
                                </td>
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
                                                    {{-- wire:click.prevent="confirmUserDeletion({{ $instance->id }})" --}}
                                                    class="dropdown-item text-danger delete-record">Supprimer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr class="odd">
                                <td>3</td>
                                <td>CLIENT3</td>
                                <td>
                                   client@d8.com
                                </td>
                                <td>client@gmail.com</td>
                                <td>20/05/2024</td>
                                <td>
                                    <span class="badge badge-center bg-label-danger">4</span>
                                </td>
                                <td>
                                <span class="badge bg-label-success">
                                        abonné
                                    </span>
                                </td>
                                <td>
                                    <!-- <span class="badge bg-label-danger">
                                        Desactivé
                                    </span> -->

                                    <!-- <span class="badge bg-label-info">
                                        Activé
                                    </span> -->
                                    <button type="button" class="btn btn-sm btn-danger waves-effect waves-light" id="confirm-color"> Desactivé</button>
                                </td>
                                </td>
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
                                                    {{-- wire:click.prevent="confirmUserDeletion({{ $instance->id }})" --}}
                                                    class="dropdown-item text-danger delete-record">Supprimer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr class="odd">
                                <td>4</td>
                                <td>CLIENT4</td>
                                <td>
                                   client4@dakdj.com
                                </td>
                                <td>client4@gmail.com</td>
                                <td>20/05/2024</td>
                                <td>
                                    <span class="badge badge-center bg-label-primary">26</span>
                                </td>
                                <td>
                                <span class="badge bg-label-secondary">
                                    Essai
                                    </span>
                                </td>
                                <td>
                                     <button type="button" class="btn btn-sm btn-danger waves-effect waves-light" id="confirm-color"> Desactivé</button>
                                </td>
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
                                                    {{-- wire:click.prevent="confirmUserDeletion({{ $instance->id }})" --}}
                                                    class="dropdown-item text-danger delete-record">Supprimer</a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>

                            <tr class="odd">
                                <td>5</td>
                                <td>CLIENT5</td>
                                <td>
                                   client@lkdj.com
                                </td>
                                <td>client4@gmail.com</td>
                                <td>20/05/2023</td>
                                <td>
                                <span class="badge badge-center bg-label-warning">0</span>
                                </td>
                                <td>
                                <span class="badge bg-label-warning">
                                    désabonné
                                    </span>
                                </td>
                                <td>
                                      <button type="button" class="btn btn-sm btn-danger waves-effect waves-light" id="confirm-color"> Desactivé</button>
                                </td>
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
                                                    {{-- wire:click.prevent="confirmUserDeletion({{ $instance->id }})" --}}
                                                    class="dropdown-item text-danger delete-record">Supprimer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">

                        </div>
                    </div>
                    <div style="width: 1%;"></div>

                     <!-- Pagination Sizes -->
              <div class="card mb-4">
                {{-- <h5 class="card-header">Sizes & Alignments</h5> --}}
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <small class="text-light fw-medium">Pagination</small>
                      <div class="demo-inline-spacing">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-sm justify-content-end">
                            <li class="page-item prev">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon fs-6 ti ti-chevrons-left"></i
                              ></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                              <a class="page-link" href="javascript:void(0);"
                                ><i class="tf-icon fs-6 ti ti-chevrons-right"></i
                              ></a>
                            </li>
                          </ul>

                      </div>
                    </div>

                  </div>
                </div>
              </div>



                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <!-- Modal -->
    {{-- <!-- @include('livewire.admin.modal.create-modal-instance') --> --}}

     <!-- Add New Address Modal -->
     <div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
                  <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      <div class="text-center mb-4">
                        <h3 class="address-title mb-2">Filtrer les résultats</h3>
                        <p class="text-muted address-subtitle">Filtrer les résultats qui affichent dans le tableau</p>
                      </div>
                      <form id="addNewAddressForm" class="row g-3" onsubmit="return false">

                        <div class="mb-4 pb-2">
                        <label for="select2Basic" class="form-label">Filtrer par status</label>
                        <select
                            id="select2Basic"
                            class="form-select form-select-lg share-project-select"
                            data-allow-clear="true">
                            <option data-name="Adelaide Nichols"  selected>

                            </option>
                            <option data-name="Julian Murphy" >Abonné</option>
                            <option data-name="Sophie Gilbert" >Désabonné</option>
                            <option data-name="Sophie Gilbert" >Essai</option>

                        </select>
                        </div>

                        <div class="mb-4 pb-2">
                        <label for="select2Basic" class="form-label">Filtrer par etat</label>
                        <select
                            id="select2Basic"
                            class="form-select form-select-lg share-project-select"
                            data-allow-clear="true">
                            <option data-name="Adelaide Nichols"  selected>

                            </option>
                            <option data-name="Julian Murphy" >Activé</option>
                            <option data-name="Sophie Gilbert" >Désactivé</option>

                        </select>
                        </div>


                        <div class="col-12">
                          <label class="form-label" for="modalAddressCountry">Filtrer par nombre de jour d'expiration</label>
                          <select
                            id="modalAddressCountry"
                            name="modalAddressCountry"
                            class="select2 form-select"
                            data-allow-clear="true">
                            <option value=""></option>
                            <option value="Australia">< 5</option>
                            <option value="Belarus">1-10</option>
                            <option value="Bangladesh">>10</option>
                            <option value="Belarus">1-20</option>
                            <option value="Belarus">infini</option>
                          </select>
                        </div>

                        <div class="col-12 text-center">
                          <button type="submit" class="btn btn-primary me-sm-3 me-1">Appliquer le filtre</button>
                          <button
                            type="reset"
                            class="btn btn-label-secondary"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                            Annuller
                          </button>
                        </div>


                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Add New Address Modal -->



     </div>





