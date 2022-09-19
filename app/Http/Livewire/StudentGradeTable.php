<?php

namespace App\Http\Livewire;

use App\Models\StudentGrade;
use Livewire\Component;
use Livewire\WithPagination;


class StudentGradeTable extends Component
{
    use withPagination;

    public $perPage = 10;

    public $search = '';

    public $orderBy = 'id';

    public $orderAsc = true; 

    public function render()
    {
        return view('livewire.student-grade-table',[
            'students' => StudentGrade::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            -> simplePaginate($this->perPage),
        ]);
    }
}
