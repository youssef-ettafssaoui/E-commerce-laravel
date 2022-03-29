<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\withPagination;
use Cart;
use App\Models\Category;


class CategoryComponent extends Component
{   
    public $sorting;
    public $pagesize;
    public $category_slug;

    public function mount($category_slug)
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->category_slug = $category_slug;
    }
    public function store($product_id,$product_name,$product_price)
    {
            Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
            session()->flash('success_message', 'Article ajouté au panier');
            return this->redirect()->route('product.cart');
    }
    use withPagination; 
    public function render()
    {   
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if($this->sorting=='date')
        {
            $products = Product::where('categories_id',$category_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=='price')
        {
            $products = Product::where('categories_id',$category_id)->orderBy('prix_ordinaire', 'ASC')->paginate($this->pagesize);
        }
        else if($this->sorting='price-desc')
        {
            $products = Product::where('categories_id',$category_id)->orderBy('prix_ordinaire', 'DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::where('categories_id',$category_id)->paginate($this->pagesize);
        }

        $categories = Category::all();

        return view('livewire.category-component', ['products'=> $products, 'categories'=> $categories, 'category_name'=> $category_name])->layout("layouts.base");
    }
}
