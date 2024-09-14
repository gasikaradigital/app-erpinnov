<div>
<!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Instances /</span> Créeation</h4>
        {{-- Message succes or error  --}}
        <!-- Create Deal Wizard -->
        <div id="wizard-create-deal" class="bs-stepper vertical mt-2">
            <div class="bs-stepper-header">
                <div class="step" data-target="#deal-type">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="ti ti-circle-check ti-sm"></i></span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Gratuit</span>
                            <span class="bs-stepper-subtitle">330 jours d'essai gratuit</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    @if(session('dolibarrPassword'))
                    <br>
                    Votre mot de passe Dolibarr est: <strong>{{ session('dolibarrPassword') }}</strong>
                    @endif
                </div>
                @endif


                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <label for="name_instance">Nom de votre instance</label>
                        <input type="text" id="name_instance" wire:model="name_instance" class="form-control"
                            placeholder="Nom de votre instance">
                        @error('name_instance') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Créer Instance</button>
                </form>
            </div>
        </div>
        <!-- /Create Deal Wizard -->
    </div>
<!--/ Content -->
</div>
