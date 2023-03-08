{{-- link css  --}}
@extends('layouts.master')
<html>
<body>
<div class="show_all">
    <h2>{{ $annonce->title }}</h2>
    <p>{{ $annonce->description }}</p>
    <ul>
        <li>Type: {{ $annonce->type }}</li>
        <li>Ville: {{ $annonce->ville}}</li>
        <li>Superficie: {{ $annonce->superficie }} m²</li>
        <li>Neuf: {{ $annonce->neuf? 'Oui' : 'Non' }}</li>
        <li>Prix: {{ $annonce->prix }} €</li>
    </ul>
    <a href="{{route('annonces.index')}}" class="btn_cancel">Annonces</a>
</div>




</body>
</html>
