{{-- link css  --}}
@extends('layouts.master')
<html>
<body>
<div class="form_all">
    <h2>Add Annonces :</h2>
    <form action="{{ route('annonces.store') }}" method="POST" class="">
        @csrf

        <div class="one">
            <label for="titre">Titre:</label>
            <input type="text" name="titre" >
        </div>

        <div class="one">
            <label for="description">Description:</label>
            <textarea name="description"> </textarea>
        </div>

        <div class="one">
            <label for="type">Type:</label>
            <select name="type" id="type">
                <option value="Appartement" >Appartement</option>
                <option value="Maison" >Maison</option>
                <option value="Villa" >Villa</option>
                <option value="Magasin" >Magasin</option>
                <option value="Terrain" >Terrain</option>
            </select>
        </div>

        <div class="one">
            <label for="ville">Ville:</label>
            <input type="text" name="ville" id="ville" >
        </div>

        <div class="one">
            <label for="superficie">Superficie:</label>
            <input type="number" name="superficie" >
        </div>

        <div class="one">
            <label for="neuf">Neuf:</label>
            <input type="checkbox" name="neuf"  >
        </div>

        <div class="one">
            <label for="prix">Prix:</label>
            <input type="number" name="prix"  >
        </div>

        <div class="btn">
            <button class="btn_edit_edit_add" type="submit">Add</button>
            <a href="{{route('annonces.index')}}" class="btn_cancel_edit_add">Cancel</a>

        </div>
    </form>

</div>



</body>
</html>
