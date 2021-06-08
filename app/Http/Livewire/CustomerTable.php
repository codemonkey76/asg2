<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerTable extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'name';
    public $sortDirection = 'asc';
    public $showFilters = false;
    public $filters = [
        'status' => '',
        'amount-min' => null,
        'amount-max' => null,
        'date-min' => null,
        'date-max' => null
    ];


    protected $queryString = ['sortField', 'sortDirection'];

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field
            ? $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc'
            : 'asc';

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.customer-table', [
            'customers' => Customer::where('name', 'like', '%'.$this->search.'%')->orderBy($this->sortField,
                $this->sortDirection)->paginate(15)
        ]);
    }


}
