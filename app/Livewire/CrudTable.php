<?php

namespace App\Livewire;

use Livewire\Component;

class CrudTable extends Component
{
    public $model;  // Dynamic model
    public $columns = [];  // Dynamic columns configuration

    // Mount method to initialize model and columns
    public function mount($model, $columns = []) 
    {
        $this->model = $model;  // Set the passed model
        
        // Loop through columns and set label to field if not set
        $this->columns = collect($columns)->map(function ($column) {
            // If no label is set, use the field value as the label
            if (empty($column['label'])) {
                // Default label is the field value (formatted nicely)
                $column['label'] = ucfirst(str_replace('_', ' ', $column['field']));
            }
            return $column;
        })->toArray();
    }

    // Render method to fetch data and pass it to the view
    public function render()
    {
        // Fetch data dynamically from the passed model
        $data = $this->model::paginate(10);  // Dynamic pagination

        // Pass both data and columns to the view
        return view('livewire.crud-table', ['data' => $data, 'columns' => $this->columns]);
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