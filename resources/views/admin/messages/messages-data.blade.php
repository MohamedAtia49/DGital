<div>
    <div class="mb-3">
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="table-responsive text-nowrap">
            @if (count($data) > 0)
                <table class="table">
                    <thead>
                    <tr>
                        <th width='20%'>Name</th>
                        <th width='20%'>Email</th>
                        <th width='20%'>Subject</th>
                        <th width='20%'>Status</th>
                        <th width='5%'>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data as $record)
                            <tr>
                                <td><strong>{{ $record->name }}</strong></td>
                                <td>{{ $record->email }}</td>
                                <td>{{ $record->subject }}</td>
                                <td>
                                    <span class="{{ $record->status == '1' ? 'fas fa-check-square' : 'fa fa-close' }} mx-3">
                                    </span>
                                </td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('messageDelete',{ id: {{ $record->id }} })" >
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </a>
                                        <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('messageShow',{ id: {{ $record->id }} })" >
                                            <i class="bx bx-trash me-1"></i> Show
                                        </a>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            @else
                <span class="text-danger">No results found</span>
            @endif
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>
