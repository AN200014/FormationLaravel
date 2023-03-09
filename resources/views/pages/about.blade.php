
@inject('nomObject','App\utilities\GetWeekend' )

@extends("base", ['titre'=> 'Page about'])

@section('vitrine')

<h3>Yangui ci pages A Propos</h3>

{{ $nomObject->GetWeekend()}}
{{$nomObject->getMessageBienvenu()}} <br>
@push('message_js')

       <script src="js/index.js "></script>

@endpush
@endsection
 
