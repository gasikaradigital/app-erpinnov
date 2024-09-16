<div>
@can('superadmin')
<!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <livewire:admin.dashboard/>

        {{-- others component --}}
    </div>
<!-- / Content -->
@else
<h1>Hey Manager</h1>
@endcan
</div>
