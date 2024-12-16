<div class="col-lg-4">
    <div class="card rounded-4 hover-shadow-lg">
        <div class="card-body p-4">
            <!-- En-tête -->
            <div class="mb-4">
               <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Plans premium</h5>
                    @if($currentPlan)
                        <span class="badge bg-light text-primary px-3 py-2">
                            Plan actuel : {{ $currentPlan->name }}
                        </span>
                    @endif
                </div>
                <p class="text-secondary small mt-3">
                    Boostez votre productivité avec nos solutions professionnelles
                </p>

                <!-- Toggle Switch -->
                <div class="d-inline-flex rounded-pill p-1">
                    <input type="radio" class="btn-check" name="pricing-period" id="monthly">
                    <label class="btn btn-sm rounded-pill px-3" for="monthly">Mensuel</label>

                    <input type="radio" class="btn-check" name="pricing-period" id="yearly" checked>
                    <label class="btn btn-sm rounded-pill px-3 d-flex align-items-center gap-2" for="yearly">
                        Annuel <span class="badge bg-success rounded-pill">-10%</span>
                    </label>
                </div>
            </div>

            <!-- Accordion des plans -->
            <div class="accordion" id="pricingAccordion">
                @foreach($plans->where('is_free', false) as $index => $plan)
                    <div class="accordion-item border-0 mb-3">
                        <div class="accordion-header">
                            <button class="btn w-100 text-start p-3 rounded-4
                            {{ $plan->name === 'Solo+' ? 'bg-primary text-white' : 'bg-gray-100' }}"
                         type="button"
                         data-bs-toggle="collapse"
                         data-bs-target="#collapse{{ $plan->id }}">
                     <div class="d-flex justify-content-between align-items-center">
                         <div>
                             <div class="d-flex align-items-center gap-2">
                                 <h6 class="mb-0 fw-semibold {{ $plan->name === 'Solo+' ? 'text-white' : 'text-dark' }}">
                                     {{ $plan->name }}
                                 </h6>
                                 @if($plan->name === 'Solo+')
                                     <span class="badge bg-white text-primary">Le plus choisi</span>
                                 @endif
                             </div>
                             <div class="{{ $plan->name === 'Solo+' ? 'text-white-50' : 'text-secondary' }} fs-7 mt-1">
                                 {{ $plan->name === 'Solo' ? 'Pour les freelances' :
                                    ($plan->name === 'Solo+' ? 'Pour les PME' : 'Pour les entreprises') }}
                             </div>
                         </div>
                         <div class="text-end">
                             <div class="yearly-price">
                                 <span class="fw-semibold fs-5 {{ $plan->name === 'Solo+' ? 'text-white' : 'text-dark' }}">
                                     {{ number_format($plan->price_yearly / 12, 0, ',', ' ') }}
                                 </span>
                                 <span class="{{ $plan->name === 'Solo+' ? 'text-white-50' : 'text-secondary' }}">
                                     Ar/mois
                                 </span>
                             </div>
                             <div class="monthly-price d-none">
                                 <span class="fw-semibold fs-5 {{ $plan->name === 'Solo+' ? 'text-white' : 'text-dark' }}">
                                     {{ number_format($plan->price_monthly, 0, ',', ' ') }}
                                 </span>
                                 <span class="{{ $plan->name === 'Solo+' ? 'text-white-50' : 'text-secondary' }}">
                                     Ar/mois
                                 </span>
                             </div>
                         </div>
                     </div>
                    </button>
                        </div>
                        <div id="collapse{{ $plan->id }}"
                             class="accordion-collapse collapse {{ $index === 1 ? 'show' : '' }}"
                             data-bs-parent="#pricingAccordion">
                            <div class="p-3">
                                <!-- Prix annuel -->
                                <div class="yearly-price bg-success bg-opacity-10 rounded-4 p-3 mb-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-success fw-medium mb-1">Prix annuel réduit</div>
                                            <div class="text-success">
                                                <strong class="fs-4">
                                                    {{ number_format($plan->price_yearly, 0, ',', ' ') }}
                                                </strong>
                                                <small>Ar/an</small>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-success">
                                                Économisez {{ number_format($plan->price_monthly * 12 - $plan->price_yearly, 0, ',', ' ') }} Ar
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fonctionnalités -->
                                <div class="mb-4">
                                    <h6 class="fw-medium mb-3">Fonctionnalités incluses :</h6>
                                    @foreach($plan->features as $feature)
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <i class="ti ti-circle-check text-success"></i>
                                            <span class="text-secondary">{{ $feature }}</span>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button"
                                    class="btn {{ $plan->name === 'Solo+' ? 'btn-primary' : 'btn-outline-primary' }} w-100 rounded-3"
                                    wire:click="changePlan('{{ $plan->uuid }}')"
                                    data-bs-dismiss="modal">
                                    <span class="d-inline-flex align-items-center gap-2">
                                        <span>{{ $plan->name === 'Solo+' ? 'Choisir l\'offre recommandée' : 'Sélectionner ce plan' }}</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </span>
                                </button>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
/* Couleurs et styles */
:root {
    --gray-100: #f8f9fa;
    --gray-200: #e9ecef;
    --primary: #6366f1;
}

.bg-gray-100 {
    background-color: var(--gray-100);
}

.fs-7 {
    font-size: 0.875rem;
}

/* Hover states */
.accordion-item button:hover {
    background-color: var(--gray-200) !important;
}

.accordion-item button.bg-primary:hover {
    background-color: #5558d6 !important;
}

/* Animation */
.accordion-item button {
    transition: all 0.2s ease;
}

/* Active state */
.accordion-item button:not(.collapsed) {
    border: 1px solid var(--primary);
}

/* Styles pour le toggle annuel/mensuel */
.btn-check:checked + .btn {
    background-color: #6366f1;
    color: white;
}

/* Animation des items de l'accordéon */
.accordion-item button {
    transition: all 0.2s ease-in-out;
    border: 1px solid transparent;
}

.accordion-item button:hover {
    border-color: #6366f1;
}

.accordion-item button:not(.collapsed) {
    border-color: #6366f1;
}

/* Animation des prix */
.yearly-price, .monthly-price {
    transition: opacity 0.3s ease;
}

/* Styles généraux */
.rounded-4 {
    border-radius: 0.75rem;
}

.hover-shadow-lg {
    transition: box-shadow 0.2s ease-in-out;
}

.hover-shadow-lg:hover {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.075);
}
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du toggle mensuel/annuel
    const monthlyRadio = document.getElementById('monthly');
    const yearlyRadio = document.getElementById('yearly');
    const monthlyPrices = document.querySelectorAll('.monthly-price');
    const yearlyPrices = document.querySelectorAll('.yearly-price');

    function togglePrices() {
        const isMonthly = monthlyRadio.checked;
        monthlyPrices.forEach(el => el.classList.toggle('d-none', !isMonthly));
        yearlyPrices.forEach(el => el.classList.toggle('d-none', isMonthly));
    }

    monthlyRadio.addEventListener('change', togglePrices);
    yearlyRadio.addEventListener('change', togglePrices);

    // Initialisation de l'accordéon Bootstrap
    const pricingAccordion = document.getElementById('pricingAccordion');
    const collapseElements = pricingAccordion.querySelectorAll('.collapse');

    collapseElements.forEach(collapse => {
        collapse.addEventListener('show.bs.collapse', (e) => {
            collapseElements.forEach(otherCollapse => {
                if (otherCollapse !== e.target && bootstrap.Collapse.getInstance(otherCollapse)) {
                    bootstrap.Collapse.getInstance(otherCollapse).hide();
                }
            });
        });
    });
});
</script>
@endpush
