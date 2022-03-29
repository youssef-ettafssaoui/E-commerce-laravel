<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;



class AdminEditProductComponent extends Component
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

    public $newimage;
    public $product_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug', $product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->courte_description = $product->courte_description;
        $this->description = $product->description;
        $this->prix_ordinaire = $product->prix_ordinaire;
        $this->prix_solde = $product->prix_solde;
        $this->SKU = $product->SKU;
        $this->stock_statut = $product->stock_statut;
        $this->Envedette = $product->Envedette;
        $this->quantite = $product->quantite;
        $this->image = $product->image;
        $this->categories_id = $product->categories_id;
        $this->newimage = $product->newimage;
        $this->product_id = $product->product_id;

    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);
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
        if ($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        
        $product->categories_id = $this->categories_id;
        $product->save();
        session()->flash('message', 'Le produit a été modifié avec succès !');
    }


    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
