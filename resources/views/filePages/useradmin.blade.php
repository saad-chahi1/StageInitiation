@extends('layouts.template1')

@section('centenu')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <div class="col-sm-2">
            <a href="/users" class="pull-right"><img title="profile image" width="175px" class="img-circle img-responsive" src="{{ asset('storage/'.$detail->photo)}}"></a>
        </div>
    <div class="col-sm-10">
        <h2>{{$detail->name}}</h2>
        <p><strong>Email : </strong> {{$detail->email}}</p>
        <p><strong>Numero de TEL : </strong> {{$detail->tele}}</p>
        <p><strong>Lycée : </strong> {{$detail->ecole}}</p>
        <p><strong>Address: </strong> {{$detail->addrs}}</p>
        @if($detail->id!=4)
        <p><strong>Categorie: </strong> {{$detail->category}}</p>
        <p><strong>Niveau: </strong> {{$detail->niv}}</p>

        
        <p><strong>Matiére: </strong> @foreach(json_decode($detail->mat) as $model)
                  {{ $model }},
          @endforeach</p>
        @endif
    </div>

@endsection