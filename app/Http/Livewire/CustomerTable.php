<?php

namespace App\Http\Livewire;

use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithSorting;
use App\Models\Customer;
use Livewire\Component;

use Symfony\Component\HttpFoundation\StreamedResponse;

class CustomerTable extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions;

    public $showFilters = false;
    public $showDeleteModal = false;
    public $filters = [
        'search'      => '',
        'overdue-min' => null,
        'overdue-max' => null,
    ];

    protected $queryString = ['sortField', 'sortDirection'];

    public function resetFilters()
    {
        $this->reset('filters');
    }

    public function updatedFilters()
    {
        $this->resetPage();
    }

    public function exportSelected(): StreamedResponse
    {
        return response()->streamDownload(function () {
            $this->getSelectedRowsQuery()->toCsv();
        }, 'customers.csv');
    }
    public function deleteSelected()
    {
        $this->selectedRowsQuery()->delete();

        $this->showDeleteModal = false;
    }

    public function getRowsQueryProperty()
    {
        $query = Customer::query()
            ->when($this->filters['overdue-min'],
                fn($query, $overdueMin) => $query->where('overdue_balance', '>=', (int) $overdueMin * 100))
            ->when($this->filters['overdue-max'],
                fn($query, $overdueMax) => $query->where('overdue_balance', '<=', (int) $overdueMax * 100))
            ->when($this->filters['search'], fn($query, $search) => $query->where('name', 'like', '%'.$search.'%'));

        return $this->applySorting($query);
    }
    public function getRowsProperty()
    {
        return $this->applyPagination($this->rowsQuery);
    }

    public function render()
    {
        if ($this->selectAll) {
            $this->selectPageRows();
        }
        return view('livewire.customer-table', [
            'customers' => $this->rows
        ]);
    }


}
