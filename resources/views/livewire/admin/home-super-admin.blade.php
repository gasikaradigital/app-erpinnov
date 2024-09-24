<div>
<<<<<<< HEAD
@can('read_dashboard_management')
<!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <livewire:admin.dashboard/>
        {{-- others component --}}
    </div>
@endcan
</div>
=======
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
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
