<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="mb-3">Roles Liste</h4>
<!-- Role cards -->
<div class="row g-4">
@php
$displayRoles = ['superadmin', 'manager'];
@endphp

@foreach ($roles as $role)
@if(in_array($role->name, $displayRoles))
<div class="col-xl-6 col-lg-6 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h6 class="fw-normal mb-0 text-body">Total {{ $roleCounts[$role->id] ?? 0 }}</h6>
            </div>
            <div class="d-flex justify-content-between align-items-end">
                <div class="role-heading">
                    <h5 class="mb-1">{{ $role->label }}</h5>
                    <a href="javascript:;" wire:click.prevent="edit({{ $role->id }})" data-bs-toggle="modal"
                        data-bs-target="#addRoleModal" class="role-edit-modal"><span>Gérer le rôle</span></a>
                </div>
                @if($role->name !== 'superadmin')
                <a href="javascript:void(0);" wire:click="delete({{ $role->id }})">
                    <i class="ti ti-trash ti-md text-heading"></i>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endif
@endforeach
</div>
<!--/ Role cards -->
@include('livewire.guard.modal.add-roles')
</div>
