<?php

namespace App\Http\Livewire;

use App\Models\Teachers;
use Livewire\Component;
use Livewire\WithPagination;


class TeachersTable extends Component
{
    use withPagination;

    public $perPage = 10;

    public $search = '';

    public $orderBy = 'id';

    public $orderAsc = true; 

    public function render()
    {
        return view('livewire.teachers-table',[
            'teachers' => Teachers::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            -> simplePaginate($this->perPage),
        ]);
    }
}
