<?php

namespace App\Http\Livewire;

use App\Models\Announcements;
use Livewire\Component;
use Livewire\WithPagination;


class AnnouncementsTable extends Component
{
    use withPagination;

    public $perPage = 10;

    public $search = '';

    public $orderBy = 'id';

    public $orderAsc = true; 

    public function render()
    {
        return view('livewire.announcements-table',[
            'announcements' => Announcements::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            -> simplePaginate($this->perPage),
        ]);
    }
}
