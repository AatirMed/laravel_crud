{{-- link css  --}}
@extends('layouts.master')
<html>
<body>
<div class="header">
    <h3>Show Annonces : </h3>
    <a href="{{route('annonces.create')}}" class="a_add" >Add</a>
</div>

<table>
    <thead>
    <tr>
        <th>Title</th>
        <th>Type</th>
        <th>ville</th>
        <th>Prix</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($annonces as $annonce)
       <tr>
            <td>{{$annonce->title}}</td>
            <td>{{$annonce->type}}</td>
            <td>{{$annonce->ville}}</td>
            <td>{{$annonce->prix}}</td>
            <td><a href="{{route('annonces.show',$annonce->id)}}" class="a_show">Show</a></td>
            <td><a href="{{route('annonces.edit',$annonce->id)}}" class="a_edit">Edit</a></td>
            <td>
                <form action="{{route('annonces.destroy',$annonce->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="a_delete">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>








</body>
</html>
