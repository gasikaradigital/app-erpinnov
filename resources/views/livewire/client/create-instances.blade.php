<div class="container-xxl flex-grow-1 container-p-y">
    @include('livewire.client.messages.styleLoader')

<div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="p-3 card p-md-3">
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="mb-2">Créer instance</h3>
                        <p>Fournissez des données avec ce formulaire pour créer instance.</p>
                    </div>
                    @include('livewire.client.messages.infocreated')
                    <div class="mt-2">
                        @if(!$showPlanSelection)
                        <div class="p-1">
                            <form wire:submit.prevent="store">
                                <!-- Votre formulaire existant ici -->
                                <div class="mb-4">
                                    <label for="name" class="form-label fw-bold mb-2">Nom d'une instance</label>
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" wire:model="name" placeholder="votreinstance" autocomplete="off"
                                            aria-describedby="name">
                                        <span class="input-group-text bg-light">.erpinnov.com</span>
                                    </div>
                                    @error('name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <small id="name" class="form-text mt-2">
                                        Entrez le nom de votre instance. Il sera suivi de .gasikara.mg
                                    </small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Votre entreprise</label>
                                    <select wire:model="entreprise"
                                        class="form-control form-control-lg @error('entreprise') is-invalid @enderror">
                                        <option value="">-- Chosir votre entreprise --</option>
                                        <option value="Entreprise_1">Entreprise_1</option>
                                        <option value="Entreprise_2">Entreprise_2</option>
                                    </select>
                                    @error('entreprise') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="mt-3 col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Créer votre
                                            instance</span>
                                        <i class="ti ti-arrow-right ti-xs"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        @else
                        <div class="text-center">
                            <p>Vous avez atteint la limite d'instances pour votre plan actuel.</p>
                            <button class="btn btn-primary" wire:click="$dispatch('openModal', 'choose-plan')">
                                Choisir une offre
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="overlay" wire:loading wire:target="store">
        <div class="spinner-container">
            <div class="sk-wave sk-primary">
                <div class="sk-wave-rect"></div>
                <div class="sk-wave-rect"></div>
                <div class="sk-wave-rect"></div>
                <div class="sk-wave-rect"></div>
                <div class="sk-wave-rect"></div>
            </div>
            <p class="loading-text mt-1">Création de l'instance en cours...</p>
            <p class="waiting-text">Veuillez patienter, svp</p>
        </div>
    </div>
</div>
@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('instanceCreationStarted', () => {
            document.body.style.overflow = 'hidden';
        });
        Livewire.on('instanceCreationEnded', () => {
            document.body.style.overflow = 'auto';
        });
    });
</script>
@endpush
