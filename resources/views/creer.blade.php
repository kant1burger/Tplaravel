@extends('layouts.base')

@section('content')
    <a href="/"> Retour à l'accueil </a>
    <h1>Créer une catégorie</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0 list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="title">Nom</label>
            <input type="text" name="name" id="title" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label for="synopsys">Description</label>
            <textarea name="description" id="synopsys" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="duration">Prix</label>
            <input type="number" name="prix" id="duration" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label for="cover">Image</label>
            <input type="file" name="cover" id="cover" class="form-control">
        </div>
        <div class="mb-3">
            <label for="category">Catégorie</label>
            <select name="category" id="category" class="form-select">
            @foreach ($categories as $category)
            <option value="" >{{ $category->name }}</option>
            @endforeach
            </select>
        </div>

        <button class="btn btn-primary mt-3">Ajouter</button>
    </form>
@endsection