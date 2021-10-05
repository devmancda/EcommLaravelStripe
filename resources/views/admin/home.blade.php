@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-success">
                </div>
                <div class="alert alert-danger">
                </div>
                <div class="card mb-5">
                    <div class="card-header">Ajouter un produit</div>
                    <ul class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data" novalidate>
                            <div class="form-group">
                                <label for="name">Nom du produit</label>
                                <input type="text" name="item_name" value="" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Prix (5000 pour 50€)</label>
                                <input type="number" name="price" value="" id="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="picture">Image</label>
                                <input type="file" name="picture" id="picture" class="form-control-file">
                            </div>
                            <input class="btn btn-success" type="submit" value="Mettre en vente">
                        </form>
                    </ul>
                </div>
                <div class="card mb-5">
                    <div class="card-header">Produits en ligne</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
