<?php

namespace App\Livewire;

use App\Models\Category;



use Livewire\Component;

class ShowCategories extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.show-categories', compact('categories'));
    }
}
