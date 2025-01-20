<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class TransactionComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public function render()
    {
        $data['car'] = Car::paginate(5);
        return view('livewire.transaction-component', $data);
    }
}
