<div>
  <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
       <div class="card">
        <div class="pt-0 card-datatable table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header flex-column flex-md-row">
                    <div class="text-center head-label">
                        <h5 class="mb-0 card-title">Utilisateurs</h5>
                    </div>
                    <div class="pt-6 dt-action-buttons text-end pt-md-0">
                        <div class="flex-wrap dt-buttons btn-group">
                            <div class="btn-group">
                                <button
                                    class="border-none btn btn-secondary buttons-collection btn-label-primary me-4 waves-effect waves-light" type="button"><span><i class="ti ti-file-export ti-xs me-sm-1"></i> <span
                                    class="d-none d-sm-inline-block">Export</span></span>
                                </button>
                            </div>
                            <button
                                class="btn btn-secondary create-new btn-primary waves-effect waves-light" tabindex="0"
                                data-bs-toggle="modal" data-bs-target="#addModal">
                                 <span>
                                    <i class="ti ti-plus me-sm-1"></i>
                                    <span class="d-none d-sm-inline-block">Ajouter un nouvel utilisateur</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <table class="table no-footer dtr-column" style="width: 1214px;">
                    <thead class="table-dark">
                        <tr>
                            <th>Nom d'utilisateur</th>
                            <th>Email</th>
<<<<<<< HEAD
                            <th>Date création</th>
=======
                            <th>Date cr茅ation</th>
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($users as $user)
                        <tr class="odd">
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2">
                                            <span class="avatar-initial rounded-circle bg-label-info">{{ substr($user->name, 0, 2) }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="emp_name text-truncate">{{ $user->name }}</span>
                                        <small class="emp_post text-truncate text-muted">
<<<<<<< HEAD
                                            {{ $user->roles->first()->label ?? 'Aucun rôle' }}
=======
                                            {{ $user->roles->first()->label ?? 'Aucun r么le' }}
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
                                        </small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                            <td>
                                <span class="badge bg-label-{{ $user->roles->isNotEmpty() ? 'success' : 'warning' }}">
<<<<<<< HEAD
                                    {{ $user->roles->first()->label ?? 'Aucun rôle' }}
=======
                                    {{ $user->roles->first()->label ?? 'Aucun r么le' }}
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
                                </span>
                            </td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="javascript:;"
                                        class="btn btn-sm btn-text-secondary rounded-pill btn-icon hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical ti-md"></i>
                                    </a>
                                    <ul class="m-0 dropdown-menu dropdown-menu-end">
                                        <li><a href="{{ route('users.detail', $user->id) }}" class="dropdown-item">Details</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li>
                                            <a href="javascript:;" wire:click.prevent="confirmUserDeletion({{ $user->id }})"
                                            class="dropdown-item text-danger delete-record">Supprimer</a>
                                        </li>
                                    </ul>
                                </div>
                               <button wire:click="editUser({{ $user->id }})" data-bs-toggle="modal" data-bs-target="#editModal"
                                class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit">
                                <i class="ti ti-pencil ti-md"></i>
                            </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                       {{-- paginate --}}
                    </div>
                </div>
                <div style="width: 1%;"></div>
            </div>
        </div>
    </div>
    </div>
    <!-- / Content -->
  <!-- Modal -->
@include('livewire.admin.modal.add-user')
@include('livewire.admin.modal.edit-user')
@include('livewire.admin.modal.delete-modal')
</div>

@push('scripts')
    <script>
        window.addEventListener('openDeleteModal', event => {
            $('#deleteModal').modal('show');
        });

        window.addEventListener('closeDeleteModal', event => {
            $('#deleteModal').modal('hide');
        });
    </script>
@endpush
