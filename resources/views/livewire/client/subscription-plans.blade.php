<div>
  <div class="modal fade" id="pricingModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Plans tarifaires</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-4 text-center">Choisissez le plan le mieux adapté à vos besoins.</p>
                    <div class="row">
                        @foreach($plans as $plan)
                        <div class="mb-4 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $plan->name }}</h5>
                                    <h2 class="card-price">{{ $plan->price }}€<small>/mois</small></h2>
                                    <p>{{ $plan->description }}</p>
                                    <ul class="mt-3 mb-4 list-unstyled">
                                        <li><i class="ti ti-check text-success"></i> {{ $plan->instance_limit ?? 'Illimité'
                                            }} instances</li>
                                        @foreach(json_decode($plan->modules) as $module)
                                        <li><i class="ti ti-check text-success"></i> {{ $module }}</li>
                                        @endforeach
                                    </ul>
                                    <button wire:click="changePlan('{{ $plan->uuid }}')"
                                        class="btn {{ $currentPlan && $currentPlan->id == $plan->id ? 'btn-outline-secondary' : 'btn-success' }}"
                                        {{ $currentPlan && $currentPlan->id == $plan->id ? 'disabled' : '' }}>
                                        {{ $currentPlan && $currentPlan->id == $plan->id ? 'Plan actuel' : 'Choisir ce plan'
                                        }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card-price {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .card-price small {
            font-size: 1rem;
            font-weight: normal;
        }

        .btn-block {
            display: block;
            width: 100%;
        }
    </style>
</div>
