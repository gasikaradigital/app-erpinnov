<!-- resources/views/livewire/confirm-cancellation.blade.php -->
<div>
    <h3>Êtes-vous sûr de vouloir annuler votre abonnement ?</h3>
    <p>Vous serez redirigé vers le plan gratuit.</p>
    <button wire:click="cancel" class="btn btn-danger">Confirmer l'annulation</button>
    <button wire:click="$dispatch('closeModal')" class="btn btn-secondary">Annuler</button>
</div>
