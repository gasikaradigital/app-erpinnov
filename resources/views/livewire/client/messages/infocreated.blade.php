{{-- @if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="ti ti-at"></i>
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif --}}
@if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if($newInstanceInfo)
<div class="mt-2 alert alert-success">
    <h6 class="mb-3"><i class="mdi mdi-check-circle me-2 text-success"></i>Nouvelle instance créée avec succès</h6>
    <div class="ps-3">
        <div class="row mb-2">
            <div class="col-md-3 fw-bold">Nom :</div>
            <div class="col-md-9">{{ $newInstanceInfo['name'] }}</div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3 fw-bold">Login :</div>
            <div class="col-md-9">{{ $newInstanceInfo['login'] }}</div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3 fw-bold">Mot de passe :</div>
            <div class="col-md-9">
                <span id="password">{{ $newInstanceInfo['password'] }}</span>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3 fw-bold">URL :</div>
            <div class="col-md-9">
                <a href="{{ $newInstanceInfo['url'] }}" target="_blank" class="text-success">
                    {{ $newInstanceInfo['url'] }}
                </a>
            </div>
        </div>
    </div>
    <div class="mt-3 small text-muted">
        <i class="mdi mdi-information-outline me-1"></i>
        Veuillez sauvegarder ces informations dans un endroit sûr. Vous les recevrez également par email.
    </div>
</div>
@endif
