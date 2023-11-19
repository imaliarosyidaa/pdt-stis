<?php
// app/Http/Livewire/DonationTable.php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Donations;

class DonationTable extends Component
{
    public $year;
    public $sortField = 'created_at';
    public $sortDirection = 'desc';

    public function render()
    {
        $donations = Donations::query()
            ->when($this->year, function ($query) {
                return $query->whereYear('created_at', $this->year);
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->get();

        return view('livewire.donation-table', compact('donations'));
    }

    public function sortBy($field, $type)
    {
        $this->sortField = $field;
        $this->sortDirection = ($type === 'terbaru') ? 'desc' : 'asc';
    }

    public function performSearch()
    {
        $this->render();
    }

}
