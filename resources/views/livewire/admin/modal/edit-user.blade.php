<!-- Modal -->
<div wire:ignore class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Modifier utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateUser">
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-4 col">
                            <label for="nameBasic" class="form-label">Nom</label>
                            <input type="text" id="name" wire:model="name" class="form-control"
                                placeholder="Nom d'utilisateur">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 col">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" wire:model="email" class="form-control"
                                placeholder="xxxx@xxx.xx">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 col">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" id="password" wire:model="password" class="form-control"
                                placeholder="*********">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col">
                            <label class="form-label" for="role">Role</label>
                            <select wire:model="role" class="form-select" id="role" required>
                                <option value="">---Choisir role---</option>
                                <option value="superadmin">Super Admin</option>
                                <option value="manager">Manager</option>
                                <option value="client">Client</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                   <button type="button" class="btn btn-label-secondary" wire:click="cancel" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
</div>
