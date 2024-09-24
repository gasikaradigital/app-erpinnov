<div class="container mt-3">
    @include('livewire.client.messages.styleLoader')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="p-3 card p-md-3">
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="mb-2">Créer instance</h3>
                        <p>Fournissez des données avec ce formulaire pour créer instance.</p>
                    </div>
                    @include('livewire.client.messages.infocreated')
                    <div class="mt-2">
                        <div class="p-1">
                            <form wire:submit.prevent="store">
                                <!-- Details -->
                                <div class="pt-3 content pt-lg-0">
                                    <!-- Champ input pour le nom de l'instance -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                               id="name" wire:model="name" placeholder="Saisir ici nom de votre instance" />
                                        @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                    <h5>
                                        Modules <br>
                                        <small>Sélectionnez les modules souhaités pour votre instance.</small>
                                    </h5>
                                   <x-modules :modules="$modules" />
                                    @error('modules') <span class="text-danger">{{ $message }}</span> @enderror
                                    <div class="mt-3 col-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Créer votre
                                                instance</span>
                                            <i class="ti ti-arrow-right ti-xs"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
     <!-- Overlay de chargement
    <div class="overlay" wire:loading wire:target="store">
        <div class="spinner-container">
            <div class="spinner"></div>
            <p class= "loading-text mt-3">Création de l'instance en cours...</p>
            <p class="waiting-text">Veuillez patienter, svp</p>
        </div>
    </div>-->

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