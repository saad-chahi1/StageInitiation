@extends('layouts.template1')

@section('centenu')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">  
             <h2 style="color: red">{{$detail->titre}}</h2>
         </div><br>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Niveau</th>
      <th scope="col">Matiere</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$detail->niveau}}</td>
      <td>{{$detail->matiere}}</td>
      <td>{{$detail->created_at}}</td>
      <td>{{$detail->updated_at}}</td>
    </tr>
  </tbody>
</table>
<br>
<div class="container">
             <p class="lead">{{$detail->comm}}</p>
</div>
<div class="container">
             <a href="/files/{{$detail->id}}" class="btn btn-success">View</a>

             <a href="{{route('downloadfile',$detail->id)}}" class="btn btn-info">Telecharger</a>
</div>

@endsection