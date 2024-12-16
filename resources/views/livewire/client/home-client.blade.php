<div>
    @push('styles')
        @include('livewire.client.messages.dashboard-styles')
    @endpush

    <div class="app-wrapper">
        <div class="container-fluid">
            <div class="row g-4">
                @include('livewire.client.plan-section')
                @include('livewire.client.table-listes')
            </div>

            <livewire:client.subscription-plans />
        </div>
    </div>
</div>
