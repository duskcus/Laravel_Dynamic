<div>
    <!-- Flash Messages -->
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                @foreach ($columns as $column)
                    <th>{{ $column['label'] }}</th>  <!-- Display the label (field name) from the column config -->
                @endforeach
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $row)
                <tr>
                    @foreach ($columns as $column)
                        <td>
                            @if (isset($column['image']) && $column['image'])
                                <!-- Handle image column (if necessary) -->
                                <img src="{{ $row[$column['field']] }}" alt="Image" style="max-width: 50px;"/>
                            @else
                                <!-- Render the data for each field dynamically -->
                                @if (is_array($row) || is_object($row))
                                    <!-- Use data_get to handle both arrays and objects -->
                                    {{ data_get($row, $column['field']) }}
                                @else
                                    {{ $row }}
                                @endif
                            @endif
                        </td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($columns) }}">No data found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Custom Pagination Links -->
    <div class="p-4 pagination">
        @if ($total > $perPage)
            <div class="join">
                <!-- Previous Button -->
                @if ($currentPage > 1)
                    <button class="join-item btn" wire:click.prevent="changePage({{ $currentPage - 1 }})">«</button>
                @else
                    <button class="join-item btn btn-disabled" disabled>«</button>
                @endif
    
                <!-- Current Page Display -->
                <button class="join-item btn">Page {{ $currentPage }}</button>
    
                <!-- Next Button -->
                @if ($currentPage < ceil($total / $perPage))
                    <button class="join-item btn" wire:click.prevent="changePage({{ $currentPage + 1 }})">»</button>
                @else
                    <button class="join-item btn btn-disabled" disabled>»</button>
                @endif
            </div>
        @endif
    </div>
</div>
