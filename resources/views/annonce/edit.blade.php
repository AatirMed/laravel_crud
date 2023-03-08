{{-- link css  --}}
@extends('layouts.master')
<html>
<body>
<div class="form_all">
    <h2>Edit Annonces :</h2>
    <form action="{{ route('annonces.update', $id) }}" method="POST">
        @csrf
@method('PUT')
        <div class="one">
            <label for="titre">Titre:</label>
            <input type="text" name="titre" value="{{$annonce->title}}">
        </div>

        <div class="one">
            <label for="description">Description:</label>
            <textarea name="description" >{{$annonce->description}} </textarea>
        </div>

        <div class="one">
            <label for="type">Type:</label>
            <select name="type" id="type">
                <option value="Appartement" {{ old('type', $annonce->type) == 'Appartement' ? 'selected' : '' }}>Appartement</option>
                <option value="Maison" {{ old('type', $annonce->type) == 'Maison' ? 'selected' : '' }}>Maison</option>
                <option value="Villa" {{ old('type', $annonce->type) == 'Villa' ? 'selected' : '' }}>Villa</option>
                <option value="Magasin" {{ old('type', $annonce->type) == 'Magasin' ? 'selected' : '' }}>Magasin</option>
                <option value="Terrain" {{ old('type', $annonce->type) == 'Terrain' ? 'selected' : '' }}>Terrain</option>
            </select>

        </div>

        <div class="one">
            <label for="ville">Ville:</label>
            <input type="text" name="ville" id="ville" value="{{$annonce->ville}}">
        </div>

        <div class="one">
            <label for="superficie">Superficie:</label>
            <input type="number" name="superficie" value="{{$annonce->superficie}}" >
        </div>

        <div class="one">
            <label for="neuf">Neuf:</label>
            <input type="checkbox" name="neuf"  @if($annonce->neuf == 1)checked @endif >
        </div>

        <div class="one">
            <label for="prix">Prix:</label>
            <input type="number" name="prix" value="{{$annonce->prix}}"  >
        </div>

        <div class="btn">
            <button class="btn_edit_edit_add" type="submit">Edit</button>
            <a href="{{route('annonces.index')}}" class="btn_cancel_edit_add">Cancel</a>

        </div>
       </form>

</div>



</body>
</html>
