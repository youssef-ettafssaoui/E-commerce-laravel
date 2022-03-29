<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $courte_description;
    public $description;
    public $prix_ordinaire;
    public $prix_solde;
    public $SKU;
    public $stock_statut;
    public $Envedette;
    public $quantite;
    public $image;
    public $categories_id;

    public function mount()
    {
        $this->stock_statut = 'instock';
        $this->Envedette = 0; 
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function addProduit()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->courte_description = $this->courte_description;
        $product->description = $this->description;
        $product->prix_ordinaire = $this->prix_ordinaire;
        $product->prix_solde = $this->prix_solde;
        $product->SKU = $this->SKU;
        $product->stock_statut = $this->stock_statut;
        $product->Envedette = $this->Envedette;
        $product->quantite = $this->quantite;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->categories_id = $this->categories_id;
        $product->save();
        session()->flash('message', 'Le produit a été conçu avec succès !');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component', ['categories'=>$categories])->layout('layouts.base');
    }
}
