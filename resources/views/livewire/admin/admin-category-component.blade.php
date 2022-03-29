<div>
    <style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
   <div class="container" style="padding: 40px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-6">Tous les catégories</div>
                           <div class="col-md-6">
                               <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right"><i class="fa fa-plus fa-lg"></i>&nbsp;&nbsp;Ajouter une nouvelle catégorie</a>
                           </div>
                       </div>
                    </div>
                    <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert"> {{Session::get('message')}}</div>
                    @endif
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Nom de catégorie</th>
                                    <th>Jeton</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>
                                        <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}"><i class="fa fa-retweet fa-2x text-warning"></i></a>
                                        <a href="#" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left:8px;"> <i class="fa fa-trash-o fa-2x text-danger"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>

   </div>
</div>
