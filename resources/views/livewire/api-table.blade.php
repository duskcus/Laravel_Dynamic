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
                            @if ($column['field'] === 'profile_picture_url')
                                <!-- Handle image column (if necessary) -->
                                <img src="{{ $row[$column['field']] }}" alt="Image" style="max-width: 50px;"/>
                            @else
                                <!-- Render the data for each field dynamically -->
                                {{ $row[$column['field']] }}
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
                    <button class="join-item btn" wire:click.prevent="loadPreviousPage">Previous</button>
                @else
                    <button class="join-item btn btn-disabled" disabled>Previous</button>
                @endif
    
                <!-- Current Page Display -->
                <button class="join-item btn">Page {{ $currentPage }}</button>
    
                <!-- Next Button -->
                @if ($nextPageUrl)
                    <button class="join-item btn" wire:click.prevent="loadNextPage">Next</button>
                @else
                    <button class="join-item btn btn-disabled" disabled>Next</button>
                @endif
            </div>
        @endif
    </div>
</div>
