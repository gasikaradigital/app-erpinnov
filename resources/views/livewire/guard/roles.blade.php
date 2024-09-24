<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="mb-3">Roles Liste</h4>
<<<<<<< HEAD
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
=======
    <!-- Role cards -->
    <div class="row g-4">

        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="fw-normal mb-0 text-body">Total 7 utilisateurs</h6>
                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Jimmy Ressula" class="avatar pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="John Doe" class="avatar pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                title="Kristi Lawker" class="avatar pull-up">
                                <img class="rounded-circle" src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar">
                            </li>
                            <li class="avatar">
                                <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="4 plus">+4</span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h5 class="mb-1">Manager</h5>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                class="role-edit-modal"><span>G茅rer le r么le</span></a>
                        </div>
                        <a href="javascript:void(0);"><i class="ti ti-trash ti-md text-heading"></i></a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--/ Role cards -->
    @include('livewire.guard.modal.add-roles')
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
</div>
