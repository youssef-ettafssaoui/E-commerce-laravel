<div>
   <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                Ajouter un nouveau Produit
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.products')}}" class="btn btn-primary pull-right"><i class="fa fa-bars fa-lg"></i>&nbsp;&nbsp;Tous les Produits</a>
                                </div>
                            </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                         <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduit">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom du Produit :</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Taper le Nom du Produit" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Jeton du Produit :</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Taper le jeton du Produit" class="form-control input-md" wire:model="slug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Courte Description :</label>
                                <div class="col-md-4">
                                <textarea class="form-control" placeholder="Donner une Petite Description du Produit..." wire:model="courte_description" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Description du Produit :</label>
                                <div class="col-md-4">
                                <textarea class="form-control" placeholder="Donner la Description du Produit..." wire:model="description" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prix ordinaire du Produit :</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Taper le Prix ordinaire du Produit" class="form-control input-md" wire:model="prix_ordinaire" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Prix Solde du Produit :</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Taper le Prix du solde du Produit" class="form-control input-md" wire:model="prix_solde" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">SKU :</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Taper SKU du Produit" class="form-control input-md" wire:model="SKU" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Etat du Stock :</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_statut">
                                    <option value="instock">En stock</option>
                                    <option value="outofstock">En rupture de stock</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">En vedette :</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="Envedette">
                                    <option value="0">Non</option>
                                    <option value="1">Oui</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Quantité :</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Taper la Quantité du Produit" class="form-control input-md" wire:model="quantite" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Image du Produit :</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image" />
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Catégorie du Produit :</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="categories_id">
                                    <option value="">Choisir une catégorie</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;&nbsp; Valider l'ajout du Produit.</button>
                                </div>
                            </div>

                         </form>

                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
