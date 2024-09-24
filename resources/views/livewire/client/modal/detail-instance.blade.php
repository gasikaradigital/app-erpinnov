<!-- Modal de détails de l'instance -->
<div wire:ignore.self class="modal fade" id="detailModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="detailModalLabel">
          <div wire:loading.remove wire:target="viewDetail">
            Détails de votre instance - {{ $reference }}
          </div>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
         @if($isLoading)
          <div wire:loading wire:target="viewDetail" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
              <span class="visually-hidden">Chargement...</span>
            </div>
          </div>
        @else
        <div wire:loading.remove wire:target="viewDetail">
          @if($instanceId)
            <div class="row g-4">
              <div class="col-md-6">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-3 text-muted">Informations générales</h6>
                    <ul class="list-unstyled mb-0">
                      <li class="mb-2"><strong>Nom d'instance :</strong> {{ $name }}</li>
                      <li class="mb-2"><strong>Date créée :</strong> {{ $created_at }}</li>
                      <li class="mb-2"><strong>Date d'expiration :</strong> {{ $expiration_date }}</li>
                      <li class="mb-2"><strong>Status :</strong> <span class="badge rounded-pill bg-{{ $status === 'Active' ? 'success' : 'danger' }}">{{ $status }}</span></li>
                      <li><strong>Type de plan :</strong> <span class="badge rounded-pill bg-{{ $planType === 'Gratuit' ? 'info' : 'primary' }}">{{ $planType }}</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-3 text-muted">Informations de connexion</h6>
                    <ul class="list-unstyled mb-0">
                      <li class="mb-2"><strong>Login :</strong> {{ $dolibarr_username }}</li>
                      <li><strong>URL :</strong> <a href="{{ $url }}" target="_blank" class="text-decoration-none">{{ $url }}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-3 text-muted">Modules activés</h6>
                    <div class="d-flex flex-wrap gap-2">
                      @foreach($modules as $module)
                        <span class="badge bg-secondary">{{ $module }}</span>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @else
            <div class="alert alert-info" role="alert">
              <i class="bi bi-info-circle me-2"></i>Aucune information disponible pour cette instance.
            </div>
          @endif
        </div>
     @endif
      </div>
      <div wire:loading.remove wire:target="viewDetail">
        <div class="modal-footer bg-light">
          <div class="d-flex justify-content-between align-items-center w-100">
            <div>
              <p class="mb-0">
                Forfait actuel : <strong>{{ $planType }}</strong>
              </p>
              @if($planType === 'Pro')
                <h2 class="mb-0 text-primary text-2xl">
                  20 <small class="text-muted text-primary">&euro;/mois</small>
                </h2>
              @else
                <p class="mb-0">Gratuit pendant 30 jours</p>
              @endif
            </div>
            <div>
              @if($planType === 'Gratuit')
                <button class="btn btn-primary" wire:click="upgradeToPro({{ $instanceId }})">
                  <i class="ti ti-star me-2"></i>Passer à la version Pro
                </button>
              @else
                <button class="btn btn-outline-danger" wire:click="cancelSubscription({{ $instanceId }})">
                  <i class="bi bi-x-circle me-2"></i>Annuler l'abonnement
                </button>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>