<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titre?? 'Draayyy tech' }}</title>
</head>
<body>
<h1>Premiér Méthode</h1>
    {{$prenom}}     {{$nom}} 


    <h1>Deuxiem Méthode</h1>
    {{ $depertement }} {{ $service }} 

 
    <h1>Troisieme Méthode</h1>
     {{" le mappelle ".$prenom}} {{$nom}}

    <h1>Quatriem Méthode</h1>
      @foreach ($tab as $slement )
          {{$slement}}.<br>
      @endforeach
          {{$nomComplet}}

    <h1>Cinquiem Méthode</h1>
         {{ $nom }}
         {{ $prenom }}
         {{ $adresse }}

         <!-- le 05/03/2023 -->
 <!-- ===================LARAVEL BLADE ======================-->
         <h1>Premiér Méthode</h1>
    @foreach 
         ($jours as $jour )
          {{$jour. " - "}}
    @endforeach

    @foreach 
         ($jours as $jour )
        @if ($jour == "Mardi")
        {{"Mardi" " - "}}
        @else
        {{$jour. " - "}} 
        @endif
      @endforeach

      <h1>Premiér Méthode</h1>
<h1>********LARAVEL BLADE********</h1>
    
<h3>=========Premiér Méthode=========</h3>

@foreach  ($jours as $jour )
    {{$jour. " - "}}
@endforeach
   
<h3>=========Dexuém Méthode=========</h3>
@foreach  ($jours as $jour )
    
     @if ($jour == "Mardi")
        {{"Mardi Gras". ' - '}}
     @else
         {{$jour. ' - '}} 
     @endif
@endforeach

<h2>*****************LA PAGES BASE****************</h2>
 <h3>==========Premier méthodde==========</h3>
    @if (isset($Page_contact))
    <h3>Bienvenue sur la page d'accueil</h3>
        
    @endif

    @yield('vitrine')

<h2>*****************LES STECKES****************</h2>
@stack('message_js') 
<!--  @stack('message_js'): permet d'appeller les steckes -->

@push('message_js')

       <script src="js/index.js "></script>

@endpush

<h2>*****************LES Injection de service****************</h2>
@if (date("N") >=6)
    {{ "C'est le wekeend" }}

@else
     {{ "C'est pas le wekeend" }}

@endif
<!-- @inject('nomObject','App\utilities\GetWeekend' ): nos pérmet de créé linjection de service -->
@inject('nomObject','App\utilities\GetWeekend')
<?php
//DAans le dossier App on à crée le dosier utilitise dans cette page un dosier getWeekend
class GetWeekend
{
   public function GetWeekend(){
   if (date("N") ==6)
    echo "C'est le wekeend" ;

else 
echo"Cest pas le wekeend" ;
     

    }


    public function getMessageBienvenu()
    {
          echo "Yeddcigua ci daraji";
    }
}
?>

<h2>*****************La COMMUNICATION AVEC UNE BD****************</h2>
<h3>==========SQL Brutte==========</h3>
  Route::get('/', function()
  {
      $article=DB::select('select * from  article');
      dd($article);

      return view('base');
  });
</body>
</html>