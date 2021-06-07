<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerTable extends Component
{
    use WithPagination;

    public $searchTerm;

    public function render()
    {
        return view('livewire.customer-table', [
            'customers' => Customer::where('name', 'like', '%' . $this->searchTerm . '%')->paginate(15)
        ]);
    }


}
