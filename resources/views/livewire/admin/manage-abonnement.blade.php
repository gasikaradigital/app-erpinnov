
<div>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

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
                           
                            @foreach($instances as $instance)
                            
                            <tr class="odd">
                                <td>{{ $instance->id }}</td>
                                <td>{{ $instance->user->name }}</td>
                                <td>{{ $instance->name }}</td>
                                <td>{{ $instance->user->email }}</td>
                                <td>{{ $instance->created_at->format('d-m-Y') }}</td>
                                <td>
                                    
                                    <span class="badge badge-center bg-label-primary">{{ $instance->days_remaining }}</span>
                                    
                                </td>
                                <td>
                                    <span class="badge bg-label-success">
                                        {{ $instance->status }}
                                    </span>
                                </td>
                                <td>
                                    <!-- <span class="badge bg-label-info">
                                        Activé
                                    </span> -->
                                    <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" id="confirm-color">Activé</button>
                                </td>
                                <td>

                                
                                    <a href="{{ route('abonnement.detail', ['id_instance' =>$instance->id, 'id_user'=>$instance->user_id]) }}">
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
                            @endforeach
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
                        {{ $instances->links() }}
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





