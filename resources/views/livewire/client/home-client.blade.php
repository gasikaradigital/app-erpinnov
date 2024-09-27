<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-4">
        {{-- bloc 1 --}}
        <div class="col-lg-5 col-md-6">

            <div class="mb-6 card">
                <!-- Current Plan -->
                <h5 class="card-header">Plan actuel :
                    <span class="badge rounded-pill bg-label-{{ $currentPlan->is_free ? 'primary' : 'success' }}">
                    {{ $currentPlan->name }}
                </span></h5>
                <div class="card-body">
                @if($subscriptionEndDate)
                    <div class="row-gap-6 row">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Bloc 1 -->
                                <div class="mb-1">
                                    <div class="mb-6">
                                        <h6 class="mb-1">Actif jusqu'au {{ $subscriptionEndDate->format('d F Y') }}</h6>
                                        <p>Nous vous enverrons une notification à l'expiration de l'abonnement</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                            @if($daysRemaining !== null && $daysRemaining <= 18)
                            <div class="mb-6 alert alert-warning" role="alert">
                            <h5 class="mb-1 alert-heading d-flex align-items-center">
                                <span class="rounded alert-icon"><i class="ti ti-alert-triangle ti-md"></i></span>
                                <span>Nous avons besoin de votre attention !</span>
                            </h5>
                            <span class="ms-11 ps-1">Votre forfait nécessite une mise à jour</span>
                            </div>
                            @endif
                            <div class="plan-statistics">
                                <div class="d-flex justify-content-between">
                                   <h6 class="mb-1">Jours utilisés</h6>
                                    <h6 class="mb-1">
                                       {{ $daysUsed }} sur {{ $totalDays }}
                                    </h6>
                                </div>
                                <div class="mb-1 rounded progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ min(100, intval(($daysUsed / $totalDays) * 100)) }}%"
                                        aria-valuenow="{{ $daysUsed }}" aria-valuemin="0" aria-valuemax="{{ $totalDays }}">
                                    </div>
                                </div>
                                <small>
                                    {{ max(0, $totalDays - $daysUsed) }} jours restants
                                </small>
                            </div>
                        </div>
                        @else
                        <p>Aucun abonnement actif</p>
                        @endif
                        <div class="flex-wrap gap-2 mt-3 col-12 d-flex">
                            <button class="btn btn-primary me-2 waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target="#pricingModal">Changer votre offre</button>
                            @if($currentPlan->is_free)
                            <a href="{{ route('instance.create') }}" class="btn btn-label-info waves-effect">Tester gratuit</a>
                            @else
                            <button class="btn btn-label-danger cancel-subscription waves-effect">Annuler abonnement</button>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- /Current Plan -->
            </div>
        </div>
        {{-- show a counter --}}
        @include('livewire.client.dashboard')
    </div>
    {{-- Modal show plans --}}
    <livewire:client.subscription-plans />
</div>

