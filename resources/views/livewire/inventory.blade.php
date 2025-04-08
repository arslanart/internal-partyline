<div>
    <div class="content-wrapper">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Inventory</h4>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-secondary text-white">
                            <tr class="text-center">
                                {{-- <th><input type="checkbox" wire:click="toggleSelectAll"></th> --}}
                                <th>No.</th>
                                <th>Device name</th>
                                <th>Region</th>
                                <th>IP address</th>
                                <th>Group</th>
                                <th>Type</th>
                                <th>Up time</th>
                                <th>Status</th>
                                <th>Select</th>
                            </tr>
                        </thead>

                    </table>
                    {{-- <div class="d-flex justify-content-center">
                        {{ $data->links('vendor.livewire.task-paginate') }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
