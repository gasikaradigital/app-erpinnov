<!-- Add Role Modal -->
<div wire:ignore class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
        <div class="modal-content p-3 p-md-5">
            <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <h3 class="role-title mb-2">Gérer le rôle</h3>
                    <p class="text-muted">Définir les autorisations de rôle</p>
                </div>
            <!-- Add role form modal -->
                   <form wire:submit.prevent="update" class="row g-3">
                        <div class="col-12 mb-4">
                            <label class="form-label" for="modalRoleName">Nom de Rôle</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Entrer nom de role"
                                wire:model="name" />
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <tbody>
                                        @foreach($modules as $module)
                                        <tr>
                                            <td colspan="2">
                                                <h6 class="mb-0 fw-bold">{{ $module }}</h6>
                                            </td>
                                        </tr>
                                        @foreach($permissions->where('module', $module) as $permission)
                                        <tr>
                                            <td class="text-nowrap">{{ $permission->label }}</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="permission_{{ $permission->id }}"
                                                        wire:model="selected_permission" value="{{ $permission->id }}" />
                                                    {{-- <label class="form-check-label" for="permission_{{ $permission->id }}">
                                                        {{ $permission->name }}
                                                    </label> --}}
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Mettre à jour</button>
                            <button type="button" class="btn btn-label-secondary" wire:click="closeModal">
                                Annuler
                            </button>
                        </div>
                    </form>
            <!--/ Add role form modal-->
            </div>
        </div>
    </div>
</div>
<!--/ Add Role Modal -->
