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
                                <!-- Display the field dynamically based on the column's 'field' attribute -->
                                {{ $item->{$column['field']} ?? 'N/A' }}
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
        {{ $data->links() }}
    </div>
</div>
