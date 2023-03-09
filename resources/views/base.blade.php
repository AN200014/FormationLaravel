<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titre?? 'Draayyy tech' }}</title>
</head>
<body>
<h2>*****************LA PAGES BASE****************</h2>
 {{-- <h3>==========Premier méthodde==========</h3> --}}
    @if (isset($Page_contact))
    <h3>Bienvenue sur la page d'accueil</h3>
        
    @endif
   
    @if (isset($Page_service))
    <h3>Bienvenue sur la page d'accueil</h3>
        
    @endif
 

    @if (isset($Page_about))
    <h3>Bienvenue sur la page d'accueil</h3>
        
    @endif
    @inject('nomObject','App\utilities\GetWeekend' )
    {{$nomObject->getMessageBienvenu()}} 


    @yield('vitrine')

    @stack('message_js')

</body>
</html>