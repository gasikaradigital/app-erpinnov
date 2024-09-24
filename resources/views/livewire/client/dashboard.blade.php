<div class="row g-4">
    <div class="col-sm-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar me-3 bg-light-info">
                        <i class="ti ti-user-dollar ti-md text-info"></i>
                    </div>
                    <div>
                        <h2 class="mb-0">{{ $paidInstancesCount }}</h2>
                        <p class="text-muted mb-0">{{ __('instance_payante') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar me-3 bg-light-success">
                        <i class="ti ti-user-check ti-md text-success"></i>
                    </div>
                    <div>
                        <h2 class="mb-0">{{ $activeInstancesCount }}</h2>
                        <p class="text-muted mb-0">{{ __('instance_active') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar me-3 bg-light-danger">
                        <i class="ti ti-user-cancel ti-md text-danger"></i>
                    </div>
                    <div>
                        <h2 class="mb-0">{{ $expiredInstancesCount }}</h2>
                        <p class="text-muted mb-0">{{ __('instance_expired') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm">
            <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar me-3 bg-light-primary">
                        <i class="ti ti-server ti-md text-primary"></i>
                    </div>
                    <div>
                        <h2 class="mb-0">{{ $totalInstancesCount }} / {{ $currentPlan->instance_limit ?? 'Illimité'
                            }}</h2>
                        <p class="text-muted mb-0">{{ __('instance_total_limit') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
