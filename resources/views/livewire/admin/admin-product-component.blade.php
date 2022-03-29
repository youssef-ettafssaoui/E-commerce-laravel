<div>
    <style>
        nav svg
        {
            height: 20px;
        }
        nav .hidden 
        {
            display:block !important;

        }

    </style>

    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tous les Produits
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right"><i class="fa fa-plus fa-lg"></i>&nbsp;&nbsp;Ajouter un nouveau Produit</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dark table-striped">
                        <thead>
                                <tr>
                                   
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Etat Stock</th>
                                    <th>Prix</th>
                                    <th>Catégorie</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                               
                                <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60"/></td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->stock_statut}}</td>
                                <td>{{$product->prix_ordinaire}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>

                                    <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><i class="fa fa-retweet fa-2x text-warning"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{$products->links( )}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

