<x-guest-layout>
<div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
        <!-- Left Text -->
        <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 auth-cover-bg-color position-relative auth-multisteps-bg-height">
            <img src="{{ asset('assets/img/illustrations/auth-register-multisteps-illustration.png')}}" alt="auth-register-multisteps" class="img-fluid" width="280">
        </div>
        <!-- /Left Text -->
        <!--  Multi Steps Registration -->
        <div class="d-flex col-lg-8 align-items-center justify-content-center authentication-bg p-5">
            <div class="w-px-700">
                <div class="border-none shadow-none mt-5">
                    <div class="px-0">
                        <form wire:submit.prevent="store">
                            @csrf
                            <!-- Personal Info -->
                            <div class="content">
                                <div class="content-header mb-6">
                                    <h4 class="mb-0">Renseignements de l'entreprise</h4>
                                    <p class="mb-0">Entrez vos informations</p>
                                </div>

                                @if($entreprises->isNotEmpty())
                                    <div class="alert alert-info d-flex align-items-center mt-3" role="alert">
                                        <i class="ti ti-info-circle me-2 fs-5"></i>
                                        <div>
                                            Vous avez déjà ajouté <strong>{{ $entreprises->count() }}</strong> entreprise(s).
                                            @if($entreprises->count() == 1)
                                                Vous pouvez en ajouter d'autres ou terminer.
                                            @else
                                                Vous pouvez continuer à en ajouter ou terminer.
                                            @endif
                                        </div>
                                    </div>
                                @endif
                                <div class="row g-6 mt-3">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="name">Nom de l'entreprise</label>
                                        <input type="text" id="name" wire:model="name" class="form-control" placeholder="SpaceX" required />
                                        @error('name') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="nif">NIF</label>
                                        <input type="text" id="nif" wire:model="nif" class="form-control multi-steps-pincode" placeholder="478920650" maxlength="18" required />
                                        @error('nif') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="phone">Téléphone</label>
                                        <input type="text" id="phone" wire:model="phone" class="form-control multi-steps-mobile" placeholder="202 555 0111" required />
                                        @error('phone') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="adresse">Adresse</label>
                                        <input type="text" id="adresse" wire:model="adresse" class="form-control" placeholder="Address" required />
                                        @error('adresse') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="ville">Ville</label>
                                        <input type="text" id="ville" wire:model="ville" class="form-control" placeholder="Mahajanga" required />
                                        @error('ville') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="pays">Pays</label>
                                        <x-country-select :selected="$pays" />
                                        @error('pays') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-12 d-flex justify-content-between mt-4">
                                        <button type="submit" class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">
                                                Ajouter</span>
                                            <i class="ti ti-circle-plus ti-xs"></i>
                                        </button>
                                        @if($showTerminerButton)
                                            <button type="button" wire:click="terminer" class="btn btn-success">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Terminer</span>
                                                <i class="ti ti-checkbox ti-xs"></i>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Multi Steps Registration -->
    </div>
</div>
</x-guest-layout>
