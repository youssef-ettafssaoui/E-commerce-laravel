<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\withPagination;
use Cart;
use App\Models\Category;


class ShopComponent extends Component
{   
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
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
        if($this->sorting=='date')
        {
            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=='price')
        {
            $products = Product::orderBy('prix_ordinaire', 'ASC')->paginate($this->pagesize);
        }
        else if($this->sorting='price-desc')
        {
            $products = Product::orderBy('prix_ordinaire', 'DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::paginate($this->pagesize);
        }

        $categories = Category::all();

        return view('livewire.shop-component', ['products'=> $products, 'categories'=> $categories])->layout("layouts.base");
    }
}
