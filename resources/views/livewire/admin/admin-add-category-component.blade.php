<div>
   <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                Ajouter une nouvelle catégorie
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.categories')}}" class="btn btn-primary pull-right"><i class="fa fa-bars fa-lg"></i>&nbsp;&nbsp;Tous les catégories</a>
                                </div>
                            </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                         <form class="form-horizontal" wire:submit.prevent="storeCategory">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nom de catégorie :</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Taper le Nom de catégorie" class="form-control input-md" wire:model="name" wire:keyup="generateslug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Jeton de catégorie :</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Taper le jeton de catégorie" class="form-control input-md" wire:model="slug"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-plus fa-lg"></i>&nbsp;&nbsp;Valider l'ajout</button>
                                </div>
                            </div>
                         </form>

                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
