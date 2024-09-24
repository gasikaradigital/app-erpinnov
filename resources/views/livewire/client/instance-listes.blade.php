<div class="card">

    @if($instances->isNotEmpty())<h5 class="card-header">{{ __('myinstances') }}</h5>@endif
    <div class="table-responsive text-nowrap">
        @if($instances->isNotEmpty())
            <table class="table">
               <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>{{ __('refrence') }}</th>
                        <th>{{ strtoupper(__('nom_instance')) }}</th>
                        <th>{{ __('module') }}</th>
                        <th>{{ __('statut') }}</th>
                        <th>{{ __('cctions') }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($instances as $instance)
                    <tr>
                        <td>{{ $instance->id }}</td>
                        <td>{{ $instance->reference }}</td>
                        <td>{{ $instance->name_instance }}</td>
                        <td>
                         @php
                            $modulesCollection = collect($instance->modules);
                        @endphp
                        @foreach($modulesCollection->take(2) as $module)
                                <span class="badge bg-label-primary me-1">
                                    {{ $module }}
                                </span>
                        @endforeach
                        @if($modulesCollection->count() > 2)
                                <span class="badge bg-label-warning me-1">
                                    +{{ $modulesCollection->count() - 2 }}
                                </span>
                        @endif
                        </td>
                        <td>
                            @php
                                $statusClass = $instance->status === 'active' ? 'bg-label-success' : 'bg-label-secondary';
                            @endphp
                            <span class="badge {{ $statusClass }} me-1">{{ ucfirst($instance->status) }}</span>
                        </td>
                        <td>
                            <!--<a href="#" class="btn btn-sm btn-primary waves-effect waves-light">-->
                            <!--    {{ __('subscribe') }}-->
                            <!--</a>-->
                            <a href="https://{{ $instance->url }}" target="_blank" class="btn btn-sm btn-outline-primary waves-effect">
                                <span class="ti-xs ti ti-external-link me-2"></span>
                                {{ __('view_url') }}
                            </a>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false" aria-label="{{ __('menu_action') }}">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item waves-effect" href="#!" wire:click.prevent="viewDetail('{{ $instance->id }}')" data-bs-target="#detailModal" data-bs-toggle="modal">
                                            <i class="ti ti-info-circle me-1"></i> {{ __('view_detail') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item waves-effect text-danger" href="#" wire:click.prevent="delete('{{ $instance->id }}')">
                                            <i class="ti ti-trash me-1"></i> {{ __('delete') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4 d-flex justify-content-center">
                {{ $instances->links() }}
            </div>
        @else
        {{-- <div class="card-body">
            <div class="alert alert-danger fade show text-center" role="alert">
                {{ __('null_instance_dispobile') }}
            </div>
        </div> --}}
        @endif
    </div>
    @include('livewire.client.modal.detail-instance')
</div>
@push('scripts')

@endpush
