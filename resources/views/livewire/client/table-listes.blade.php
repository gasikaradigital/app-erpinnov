<div class="col-lg-8">
    <div class="card rounded-4 hover-shadow-lg">
        <div class="card-body p-4">
            <!-- En-tête -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-medium mb-0">Mes espaces de travail</h5>
                <button class="btn btn-primary px-4 rounded-3 d-inline-flex align-items-center gap-2"
                        data-bs-toggle="modal"
                        data-bs-target="#instanceModal">
                    <i class="ti ti-plus"></i>
                    <span>Créer mon espace</span>
                </button>
            </div>

            @if($instances->isNotEmpty())
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="py-3 text-secondary small text-uppercase fw-medium">Instance</th>
                                <th class="py-3 text-secondary small text-uppercase fw-medium">Identifiant</th>
                                <th class="py-3 text-secondary small text-uppercase fw-medium">Créé le</th>
                                <th class="py-3 text-secondary small text-uppercase fw-medium">Expiré</th>
                                <th class="py-3 text-secondary small text-uppercase fw-medium">Statut</th>
                                <th class="py-3 text-secondary small text-uppercase fw-medium text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($instances as $instance)
                                <tr class="border-bottom">
                                    <td class="py-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('assets/img/flags/' . ($instance->pays === 0 ? '0.png' : '1.png')) }}"
                                                 alt="{{ $instance->getPaysNomAttribute() }}"
                                                 width="20"
                                                 class="rounded">
                                            <span class="fw-medium">{{ $instance->getPaysNomAttribute() }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3">{{ $instance->dolibarr_username }}</td>
                                    <td class="py-3 text-secondary">{{ Carbon\Carbon::parse($instance->created_at)->format('d/m/Y') }}</td>
                                    <td class="py-3 text-secondary">{{ $this->getFormattedEndDate() }}</td>
                                    <td class="py-3">
                                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2 py-1">
                                            Active
                                        </span>
                                    </td>
                                    <td class="py-3 text-end">
                                        <div class="dropdown">
                                            <button type="button"
                                                    class="btn btn-icon btn-text-secondary rounded-circle"
                                                    data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end rounded-3 border-0 shadow-sm py-2">
                                                <a class="dropdown-item d-flex align-items-center gap-2 px-3 py-2"
                                                   href="{{ $instance->url }}"
                                                   target="_blank">
                                                    <i class="ti ti-external-link"></i>
                                                    <span>Accéder</span>
                                                </a>
                                                <button wire:click="viewDetail({{ $instance->id }})"
                                                        class="dropdown-item d-flex align-items-center gap-2 px-3 py-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailModal">
                                                    <i class="ti ti-eye"></i>
                                                    <span>Détails</span>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-5">
                    <!-- Icône -->
                    <div class="d-inline-flex p-3 rounded-circle bg-light mb-3">
                        <i class="ti ti-layout-grid fs-2 text-warning opacity-75"></i>
                    </div>
                    <h5 class="fw-medium mb-3">Aucun espace de travail</h5>
                    <p class="text-secondary mb-3">
                        Créez votre premier espace de travail pour commencer.
                    </p>

                    <!-- Avantages en ligne -->
                    <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap mb-0">
                        <span class="badge bg-light text-secondary d-flex align-items-center gap-1">
                            <i class="ti ti-calendar text-success"></i>
                            30 jours gratuits
                        </span>
                        <span class="badge bg-light text-secondary d-flex align-items-center gap-1">
                            <i class="ti ti-server text-success"></i>
                            1 instance offerte
                        </span>
                        <span class="badge bg-light text-secondary d-flex align-items-center gap-1">
                            <i class="ti ti-shield text-success"></i>
                            Sans engagement
                        </span>
                    </div>

                    <!-- Message de confiance -->
                    <p class="text-muted small mt-3 mb-0">
                        <i class="ti ti-users text-primary me-1"></i>
                        1000+ entreprises nous font confiance
                    </p>
                </div>
            @endif
        </div>
    </div>
    <livewire:client.create-instances />
</div>

@include('livewire.client.modal.detail-instance')

<style>
/* Styles du tableau */
.table th {
    font-size: 0.75rem;
    font-weight: 500;
}

.hover-shadow-lg {
    transition: box-shadow 0.2s ease-in-out;
}

.hover-shadow-lg:hover {
    box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.05);
}

.btn-icon {
    width: 32px;
    height: 32px;
    padding: 0;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.dropdown-menu {
    min-width: 160px;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
}

.badge {
    font-weight: 500;
}
</style>
