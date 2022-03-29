<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\withPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function  deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'La catégorie a été supprimé avec succès !');
    }
    public function render()
    {

        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component', ['categories'=> $categories ])->layout('layouts.base');
    }
}
