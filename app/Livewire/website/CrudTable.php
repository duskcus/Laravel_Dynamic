<?php

namespace App\Livewire\Website;

use Livewire\Component;

class CrudTable extends Component
{
    public $model;  // Dynamic model
    public $columns = [];  // Dynamic columns configuration

    // Mount method to initialize model and columns
    public function mount($model, $columns = []) 
    {
        $this->model = $model;  // Set the passed model
        $this->columns = $columns ?: $this->getDefaultColumns();  // Use passed columns, or fallback to default
    }

    // Render method to fetch data and pass it to the view
    public function render()
    {
        // Fetch data dynamically from the passed model
        $data = $this->model::paginate(10);  // Dynamic pagination

        // Pass both data and columns to the view
        return view('livewire.website.crud-table', ['data' => $data, 'columns' => $this->columns]);  
    }

    // Define default column configuration
    protected function getDefaultColumns()
    {
        return [
            ['label' => 'Name', 'field' => 'name', 'sortable' => true],
            ['label' => 'Email', 'field' => 'email', 'sortable' => false],
            // Add more default columns as needed
        ];
    }
}
