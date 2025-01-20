<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Log;


class ApiTable extends Component
{
    // public $query = [];   
    public $columns = []; // Dynamic columns configuration
    public $apiUrl;  // API URL for fetching data
    public $data = [];    // Data to be displayed in the table
    public $perPage; // Pagination size
    public $currentPage; // Current page
    public $nextPageUrl;  // URL for next page of API data
    public $total;        // Total records

    // Mount method to initialize columns and API URL
    public function mount($columns = [], $apiUrl)
    {
        $this->columns = $this->initializeColumns($columns); // Initialize columns
        $this->apiUrl = $apiUrl; // Set API URL
        
        $this->loadDataFromApi();  // Load data from API
    }

    // Dynamically initialize columns with default labels if not set
    protected function initializeColumns($columns)
    {
        return collect($columns)->map(function ($column) {
            // If no label is set, use the field value as the label
            if (empty($column['label'])) {
                $column['label'] = ucfirst(str_replace('_', ' ', $column['field']));
            }
            return $column;
        })->toArray();
    }

    // Fetch data from the API
    public function loadDataFromApi()
    {
        // Construct URL with pagination parameters
        $url = $this->apiUrl . '?offset=' . $this->currentPage . '&limit=' . $this->perPage;
        // Fetch the data from the API
        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            // Store the results (the actual data items)
            $this->data = $data['results'];
            // Pagination info
            $this->total = $data['count'];
            $this->nextPageUrl = $data['next']; // Use the next URL for pagination
        } else {
            session()->flash('error', 'Failed to fetch data from API');
        }
    }

    // Method to load next page of data
    public function loadNextPage()
    {
        if ($this->nextPageUrl) {
            $this->currentPage++;
            $this->loadDataFromApi();
        }
    }

    // Method to load previous page of data (if needed)
    public function loadPreviousPage()
    {
        if ($this->currentPage > 1) {
            $this->currentPage--;
            $this->loadDataFromApi();
        }
    }

    // Render method to fetch data and pass it to the view
    public function render()
    {
        return view('livewire.api-table');
    }
}