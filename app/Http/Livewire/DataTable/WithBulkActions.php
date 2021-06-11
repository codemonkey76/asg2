<?php

namespace App\Http\Livewire\DataTable;

trait WithBulkActions
{
    public $selectPage = false;
    public $selectAll = false;
    public $selected = [];

    public function renderingWithBulkActions()
    {
        if ($this->selectAll) {
            $this->selectPageRows();
        }
    }

    public function updateSelected()
    {
        $this->selectAll = false;
        $this->selectPage = false;
    }

    public function updatedSelectPage($value)
    {
        if ($value) {
            return $this->selectPageRows();
        }

        $this->selected = [];
    }

    public function selectPageRows()
    {
        $this->selected = $this->rows->pluck('id')->map(fn($item) => (string) $item);
    }

    public function selectAll()
    {
        $this->selectAll = true;
    }

    public function getSelectedRowsQuery()
    {
        return (clone $this->rowsQuery)
            ->unless($this->selectAll, fn($query) => $query->whereKey($this->selected));
    }
}
