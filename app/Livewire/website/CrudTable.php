<?php

namespace App\Livewire\Website;

use Livewire\Component;
use App\Models\User;

class CrudTable extends Component
{
    public function mount()
    {
        // Get all users
        $users = User::all();

        // Return a view with users data
        return view('users.index', compact('users'));
    }

    public function render()
    {
        return view('livewire.website.crud-table');
    }
}
