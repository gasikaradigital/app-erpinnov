<div>
<!-- Pricing Modal -->
<div class="modal fade" id="pricingModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-simple modal-pricing">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <!-- Pricing Plans -->
           <div class="rounded-top">
            <!-- Header -->
            <h4 class="text-center mb-2">{{ __('Plans de tarification')}}</h4>
            <div class="modal-body">
            <p class="text-center mb-4">
                Tous les plans incluent des outils et fonctionnalités avancés pour optimiser la gestion de votre entreprise.
            </p>
            <!-- Pricing Toggle -->
            <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-12 pb-4">
            <label class="switch switch-sm ms-sm-12 ps-sm-12 me-0">
                <span class="switch-label fs-6 text-body">Mois</span>
                <input type="checkbox" class="switch-input price-duration-toggler" checked />
                <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
                </span>
                <span class="switch-label fs-6 text-body">Annuel</span>
            </label>
            <div class="mt-n5 ms-n10 ml-2 mb-10 d-none d-sm-flex align-items-center gap-2">
                <i class="ti ti-corner-left-down ti-lg text-muted scaleX-n1-rtl mt-2"></i>
                <span class="badge bg-success ms- mt-2">Économisez 10%</span></label>
            </div>
            </div>
            <div class="row gy-6">
              @foreach($plans as $plan)
              <div class="col-xl mb-md-0">
                <div class="card border rounded shadow-none {{ $plan->name === 'Pro' ? 'border-primary' : '' }}">
                  <div class="card-body {{ $plan->name === 'Pro' ? 'position-relative pt-4' : 'pt-12' }}">
                    @if($plan->name === 'Pro')
                    <div class="position-absolute end-0 me-5 top-0 mt-4">
                      <span class="badge bg-label-primary rounded-1">Populaire</span>
                    </div>
                    @endif
                    {{-- <div class="mt-3 mb-5 text-center">
                      <img src="{{ asset('assets/img/illustrations/page-pricing-' . strtolower($plan->name) . '.png') }}" alt="{{ $plan->name }} Image" height="100">
                    </div> --}}
                    <h4 class="card-title text-center text-capitalize mb-1">{{ $plan->name }}</h4>
                    <p class="text-center mb-5">{{ $plan->description }}</p>
                    <div class="text-center h-px-50">
                      <div class="d-flex justify-content-center">
                        <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">Ar</sup>
                        <h1 class="price-toggle price-yearly text-primary mb-0">{{ number_format($plan->price_yearly / 12, 0, ',', ' ') }}</h1>
                        <h1 class="price-toggle price-monthly text-primary mb-0 d-none">{{ number_format($plan->price_monthly, 0, ',', ' ') }}</h1>
                        <sub class="h6 text-body pricing-duration mt-auto mb-1">/mois</sub>
                      </div>
                      <small class="price-yearly price-yearly-toggle text-muted">Ar {{ number_format($plan->price_yearly, 0, ',', ' ') }} / an</small>
                    </div>

                    <ul class="list-group ps-6 my-5 pt-9">
                        @forelse($plan->features as $feature)
                            <li class="mb-4">{{ $feature }}</li>
                        @empty
                            <li class="mb-4">Aucune fonctionnalité spécifiée</li>
                        @endforelse
                    </ul>

                    <button type="button" class="btn {{ $plan->name === 'Pro' ? 'btn-primary' : 'btn-label-primary' }} d-grid w-100" wire:click="changePlan('{{ $plan->uuid }}')" data-bs-dismiss="modal">Choisir ce plan</button>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <!--/ Pricing Plans -->
        </div>
       </div>
    </div>
    </div>
</div>
<!--/ Pricing Modal -->
</div>
