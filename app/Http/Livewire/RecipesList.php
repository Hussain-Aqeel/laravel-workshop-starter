<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RecipesList extends Component
{
    public function render()
    {
        $recipes = \App\Models\Recipe::all();

        return view('livewire.recipes-list', [
            'recipes' => $recipes
        ]);
    }
}
