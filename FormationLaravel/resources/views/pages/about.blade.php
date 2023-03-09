<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>
</html>