@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-success">
                </div>
                <div class="alert alert-danger">
                </div>
                <div class="card">
                    <div class="card-header">Modifier un produit</div>
                    <ul class="card-body">
                        <form method="POST" action="" novalidate>
                            <div class="form-group">
                                <label for="name">Nom du produit</label>
                                <input type="text" name="item_name" value="" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Prix (5000 pour 50€)</label>
                                <input type="number" name="price" value="" id="price" class="form-control">
                            </div>
                            <input class="btn btn-success" type="submit" value="Mettre à jour">
                        </form>
                        <a class="btn btn-danger mt-3" href="" onclick="event.preventDefault(); document.getElementById('destroy').submit();">Supprimer</a>
                        <form id="destroy" action="" method="POST" style="display: none;">
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
