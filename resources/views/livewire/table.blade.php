<div>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                    </th>
                    <!-- Loop through the dynamic columns to create the table headers -->
                    @foreach ($columns as $column)
                        <th>
                            {{ $column['label'] }}
                        </th>
                    @endforeach
                    <th></th> <!-- For the action column -->
                </tr>
            </thead>
            <tbody>
                <!-- Loop through the dynamic data -->
                @foreach ($data as $item)
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox" />
                            </label>
                        </th>

                        <!-- Loop through the columns to display the data -->
                        @foreach ($columns as $column)
                            <td>
                                <!-- Check if the column is for an image -->
                                @if (!empty($column['image']) && $column['image'] === true)
                                    <!-- Render the image if it's an image column -->
                                    @if ($item->{$column['field']})
                                        <img src="{{ asset($item->{$column['field']}) }}" alt="Image" width="50" />
                                    @else
                                        <span>No Image</span>
                                    @endif
                                @else
                                    <!-- Otherwise, just show the field value -->
                                    {{ $item->{$column['field']} ?? 'N/A' }}
                                @endif
                            </td>
                        @endforeach

                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                @endforeach
                <!-- End loop -->
            </tbody>
        </table>

        <!-- Pagination links -->
        <div class="p-4">
            {{ $data->links() }}
        </div>
    </div>
</div>
