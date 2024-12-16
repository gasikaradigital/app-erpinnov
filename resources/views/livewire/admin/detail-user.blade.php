<div>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><a href="{{ route('users.liste') }}" class="text-muted fw-light">Listes /</a> Details</h4>
        <div class="row">
            <!-- User Sidebar -->
            <div class="order-1 col-xl-4 col-lg-5 col-md-5 order-md-0">
                <!-- User Card -->
                <div class="mb-4 card">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                <img class="pt-1 mt-4 mb-3 rounded img-fluid" src="{{ $user->profile_photo_url }}"
                                    height="100" width="100" alt="User avatar" />
                                <div class="text-center user-info">
                                    <h4 class="mb-2">{{ $user->name }}</h4>
                                    <span class="mt-1 badge bg-label-secondary">{{ $user->roles->first()->label ?? 'Aucun
                                        rôle' }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex-wrap pt-3 pb-4 mt-3 d-flex justify-content-around border-bottom">
                            <!-- Vous pouvez ajouter des statistiques ici si nécessaire -->
                        </div>
                        <p class="mt-4 small text-uppercase text-muted">Details</p>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <span class="fw-medium me-1">Nom:</span>
                                    <span>{{ $user->name ?? 'Non défini' }}</span>
                                </li>
                                <li class="pt-1 mb-2">
                                    <span class="fw-medium me-1">Email:</span>
                                    <span>{{ $user->email }}</span>
                                </li>
                                <li class="pt-1 mb-2">
                                    <span class="fw-medium me-1">Status:</span>
                                    <span class="badge bg-label-success">{{ $user->status ?? 'Actif' }}</span>
                                </li>
                                <li class="pt-1 mb-2">
                                    <span class="fw-medium me-1">Role:</span>
                                    <span>{{ $user->roles->first()->label ?? 'Aucun rôle' }}</span>
                                </li>
                                <!-- Ajoutez d'autres détails selon vos besoins -->
                            </ul>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:;" class="btn btn-label-danger suspend-user">Bloquer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- User Pills -->
                <ul class="mb-4 nav nav-pills flex-column flex-md-row">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i
                                class="ti ti-user-check ti-xs me-1"></i>Account</a>
                    </li>
                </ul>
                <!--/ User Pills -->

                <!-- Project table -->
                <div class="mb-4 card">
                    <h5 class="card-header">Liste des instances</h5>
                    <div class="mb-3 table-responsive">
                        <!-- Ajoutez ici le tableau des instances de l'utilisateur -->
                    </div>
                </div>
                <!-- /Project table -->

                <!-- Invoice table -->
                <div class="mb-4 card">
                    <h5 class="card-header">Liste des factures</h5>
                    <div class="mb-3 table-responsive">
                        <!-- Ajoutez ici le tableau des factures de l'utilisateur -->
                    </div>
                </div>
                <!-- /Invoice table -->
            </div>
            <!--/ User Content -->
        </div>
    </div>
    <!-- / Content -->
@include('livewire.admin.modal.edit-user')
</div>
