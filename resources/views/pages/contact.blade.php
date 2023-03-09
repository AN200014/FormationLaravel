@inject('nomObject','App\utilities\GetWeekend' )

@extends("base", ['titre'=> 'Page Contact',
         'Page_contact' => 'Mérci',
])

@section('vitrine')
<h3> Page contact </h3>

{{ $nomObject->GetWeekend()}}
@push('message_js')

       <script src="js/index.js "></script>

@endpush
        
@endsection