<div class="col-lg-7 col-md-6">
    <div class="shadow-sm card">
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <h5 class="m-0 card-title fw-bold">Instances</h5>
                <small class="text-muted">Mis à jour il y a 1 mois</small>
            </div>
            <div class="text-center row g-3">
                <div class="col-6 col-sm-3">
                    <div class="p-3 rounded bg-light">
                        <i class="bi bi-clock text-primary fs-4"></i>
                        <h3 class="mt-2 mb-0">{{ $statistics['paidInstances'] }}</h3>
                        <p class="mb-0 text-muted small">Instance Payer</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="p-3 rounded bg-light">
                        <i class="bi bi-person text-info fs-4"></i>
                        <h3 class="mt-2 mb-0">{{ $statistics['activeInstances'] }}</h3>
                        <p class="mb-0 text-muted small">Instance active</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="p-3 rounded bg-light">
                        <i class="bi bi-pause-circle text-warning fs-4"></i>
                        <h3 class="mt-2 mb-0">{{ $statistics['expiredInstances'] }}</h3>
                        <p class="mb-0 text-muted small">Instance expiré</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="p-3 rounded bg-light">
                        <i class="bi bi-graph-up text-success fs-4"></i>
                        <h3 class="mt-2 mb-0">{{ $statistics['totalInstances'] }} / {{ $currentPlan->instance_limit ??
                            'Illimité'
                            }}</h3>
                        <p class="mb-0 text-muted small">Instance limite</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
