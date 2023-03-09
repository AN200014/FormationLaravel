@extends('base',['titre'=>'Liste etudiante'])

@section('vitrine')

   <h1>=============Listes Des Etudiants=============</h1>
   <ul>
   @foreach ($etudiants as $etudiant )
            <li>{{ $etudiant->prenom }} {{ $etudiant->nom }}</li>
   @endforeach
   </ul>
@endsection