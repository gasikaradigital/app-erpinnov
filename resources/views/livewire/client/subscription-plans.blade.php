<div>
    @if($currentPlan)
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-4">Plan actuel : {{ $currentPlan->name }}</h4>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <p class="mb-1 text-muted">Prix</p>
                            <h5>{{ $currentPlan->price }} € / mois</h5>
                        </div>
                        <div class="col-md-3">
                            <p class="mb-1 text-muted">Limite d'instances</p>
                            <h5>{{ $currentPlan->instance_limit ?? 'Illimité' }}</h5>
                        </div>
                        <div class="col-md-3">
                            <p class="mb-1 text-muted">Durée</p>
                            <h5>{{ $currentPlan->duration_days }} jours</h5>
                        </div>
                        <div class="col-md-3">
                            <p class="mb-1 text-muted">Instances restantes</p>
                            <h5>{{ $remainingInstances }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <h4 class="text-center mb-4">Nos offres d'abonnement</h4>
    <div class="row g-4">
        @foreach($plans as $plan)
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center d-flex flex-column">
                    <h5 class="mb-3">{{ $plan->name }}</h5>
                    <p class="mb-3">{{ $plan->price }} € / mois</p>
                    <p class="mb-3">{{ $plan->instance_limit ?? 'Illimité' }} instances</p>
                    <p class="flex-grow-1">{{ $plan->description }}</p>
                    <ul class="list-unstyled mb-4">
                        @foreach(json_decode($plan->modules) as $module)
                        <li><i class="ti ti-check text-success"></i> {{ $module }}</li>
                        @endforeach
                    </ul>
                    @if($currentPlan && $currentPlan->id == $plan->id)
                    <button class="btn btn-success" disabled>Plan actuel</button>
                    @else
                    <button wire:click="changePlan({{ $plan->id }})" class="btn btn-primary">Choisir ce plan</button>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
