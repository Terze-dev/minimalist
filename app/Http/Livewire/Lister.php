<?php

namespace App\Http\Livewire;

use App\Item;
use App\Auth\Auth;
use Livewire\Component;

class Lister extends Component
{

    public $items;
    public function render()
    {
        $this->items = auth()->user()->items;
        return view('livewire.lister');
    }
}
