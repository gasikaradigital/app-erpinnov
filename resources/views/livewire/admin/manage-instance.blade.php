<div>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="pt-0 card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header flex-column flex-md-row">
                        <div class="text-center head-label">
                            <h5 class="mb-0 card-title">Gestion des instances</h5>
                        </div>
                        <div class="pt-6 dt-action-buttons text-end pt-md-0">
                            <div class="flex-wrap dt-buttons btn-group">
                                <div class="btn-group">
                                    <button
                                        class="border-none btn btn-secondary buttons-collection btn-label-primary me-4 waves-effect waves-light"
                                        type="button"><span><i class="ti ti-file-export ti-xs me-sm-1"></i> <span
                                                class="d-none d-sm-inline-block">Export</span></span>
                                    </button>
                                </div>
                                <button class="btn btn-secondary create-new btn-primary waves-effect waves-light"
                                    tabindex="0" data-bs-toggle="modal" data-bs-target="#createApp">
                                    <span>
                                        <i class="ti ti-plus me-sm-1"></i>
                                        <span class="d-none d-sm-inline-block">Nouvel instance</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <table class="table no-footer dtr-column" style="width: 1214px;">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Ref</th>
                                <th>Nom d'instance</th>
                                <th></th>
                                <th>Catégorie</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($instances as $key => $instance)
                            <tr class="odd">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $instance->reference }}</td>
                                <td>
                                    {{ $instance->name_instance }}
                                </td>
                                <td>{{ $instance->type }}</td>
                                <td>{{ $instance->category }}</td>
                                <td>
                                    <span class="badge bg-label-{{ $instance->status ? 'success' : 'warning' }}">
                                        {{ $instance->status }}
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
                                            <li><a href="#"
                                                    class="dropdown-item">Details</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li>
                                                <a href="javascript:;"
                                                    wire:click.prevent="confirmUserDeletion({{ $instance->id }})"
                                                    class="dropdown-item text-danger delete-record">Supprimer</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button wire:click="editUser({{ $instance->id }})" data-bs-toggle="modal"
                                        data-bs-target="#editModal"
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
    @include('livewire.admin.modal.create-modal-instance')
</div>
