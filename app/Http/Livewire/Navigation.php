<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        $category = Category::all();
        return view('livewire.navigation', compact('category'));
    }
}
