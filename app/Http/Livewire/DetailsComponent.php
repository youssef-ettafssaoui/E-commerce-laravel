<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Cart;


class DetailsComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;

    }
    public function store($product_id,$product_name,$product_price)
    {
            Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
            session()->flash('success_message', 'Votre article a été ajouter au panier');
            return redirect()->route('product.cart');
    }
    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();

        $products_popular = Product::inRandomOrder()->limit(4)->get();

        $products_related = Product::where('categories_id', $product->categories_id)->inRandomOrder()->limit(5)->get();

        return view('livewire.details-component',['product'=>$product,'products_popular'=>$products_popular, 'products_related'=>$products_related])->layout('layouts.base');
    }
}
