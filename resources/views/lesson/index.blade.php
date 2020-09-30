@extends('layouts.template1')

@section('centenu')
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



  <!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">le tableau de cours</h3>
  <div class="pull-right">
    <a href="{{url('lessons/create')}}" class="btn btn-info">Nouveau Lesson</a>
  </div>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            <h2 style="color:black;">Primaire </h2>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
          	<th class="text-center">Task</th>
            <th class="text-center">Titre</th>
            <th class="text-center">Niveau</th>
      		<th class="text-center">Matiere</th>
          <th class="text-center">Date</th>
      		
          </tr>
        </thead>
        <tbody>
        	 @foreach($lessons as $value)
           @if($value->category=='Primaire')
          <tr>
          	<td class="pt-3-half" contenteditable="true">{{$value->id}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->titre}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->niveau}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->matiere}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->created_at}}</td>
            
            <td class="pt-3-half">
              <span class="table-remove"><a class="btn btn-primary btn-rounded btn-sm my-0" href="{{url('lessons/'.$value->id.'/details')}}">Details</a></span>
            </td>
            <td>
              <form class="md-form" method="POST" action="{{url('lessons/'.$value->id)}}">
                @csrf
                {{method_field('DELETE')}}
             
              	<span class="table-remove"><button class="btn btn-danger btn-rounded btn-sm my-0" type="submit">Supprimer</button></span> </form>
            </td>
          </tr>
          @endif
          @endforeach
         
        </tbody>
      </table>
       <h2 style="color:black;">Collège </h2>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Task</th>
            <th class="text-center">Titre</th>
            <th class="text-center">Niveau</th>
          <th class="text-center">Matiere</th>
          <th class="text-center">Date</th>
          
          </tr>
        </thead>
        <tbody>
           @foreach($lessons as $value)
           @if($value->category=='Collège')
          <tr>
            <td class="pt-3-half" contenteditable="true">{{$value->id}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->titre}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->niveau}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->matiere}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->created_at}}</td>
            
            <td class="pt-3-half">
              <span class="table-remove"><a class="btn btn-primary btn-rounded btn-sm my-0" href="{{url('lessons/'.$value->id.'/details')}}">Details</a></span>
            </td>
            
            <td>
              <form class="md-form" method="POST" action="{{url('lessons/'.$value->id)}}">
                @csrf
                {{method_field('DELETE')}}
             
                <span class="table-remove"><button class="btn btn-danger btn-rounded btn-sm my-0" type="submit">Supprimer</button></span> </form>
            </td>
          </tr>
          @endif
          @endforeach
         
        </tbody>
      </table>
      <h2 style="color:black;">Lycée </h2>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Task</th>
            <th class="text-center">Titre</th>
            <th class="text-center">Niveau</th>
          <th class="text-center">Matiere</th>
          <th class="text-center">Date</th>
          
          </tr>
        </thead>
        <tbody>
           @foreach($lessons as $value)
           @if($value->category=='Lycée')
          <tr>
            <td class="pt-3-half" contenteditable="true">{{$value->id}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->titre}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->niveau}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->matiere}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->created_at}}</td>
            
            <td class="pt-3-half">
              <span class="table-remove"><a class="btn btn-primary btn-rounded btn-sm my-0" href="{{url('lessons/'.$value->id.'/details')}}">Details</a></span>
            </td>
            
            <td>
              <form class="md-form" method="POST" action="{{url('lessons/'.$value->id)}}">
                @csrf
                {{method_field('DELETE')}}
             
                <span class="table-remove"><button class="btn btn-danger btn-rounded btn-sm my-0" type="submit">Supprimer</button></span> </form>
            </td>
          </tr>
          @endif
          @endforeach
         
        </tbody>
      </table>
            <h2 style="color:black;">CPGE ou University </h2>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Task</th>
            <th class="text-center">Titre</th>
            <th class="text-center">Niveau</th>
          <th class="text-center">Matiere</th>
          <th class="text-center">Date</th>
          
          </tr>
        </thead>
        <tbody>
           @foreach($lessons as $value)
           @if($value->category=='CPGE ou University')
          <tr>
            <td class="pt-3-half" contenteditable="true">{{$value->id}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->titre}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->niveau}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->matiere}}</td>
            <td class="pt-3-half" contenteditable="true">{{$value->created_at}}</td>
            
            <td class="pt-3-half">
              <span class="table-remove"><a class="btn btn-primary btn-rounded btn-sm my-0" href="{{url('lessons/'.$value->id.'/details')}}">Details</a></span>
            </td>
            
            <td>
              <form class="md-form" method="POST" action="{{url('lessons/'.$value->id)}}">
                @csrf
                {{method_field('DELETE')}}
             
                <span class="table-remove"><button class="btn btn-danger btn-rounded btn-sm my-0" type="submit">Supprimer</button></span> </form>
            </td>
          </tr>
          @endif
          @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->

 <!-- users table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">le tableau des utilisateurs</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Task</th>
            <th class="text-center">Nom</th>
            <th class="text-center">Tele</th>
          <th class="text-center">Email</th>
          <th class="text-center">crée à</th>
          
          </tr>
        </thead>
        <tbody>
           @foreach($users as $valeur)
          <tr>
            <td class="pt-3-half" contenteditable="true">{{$valeur->id}}</td>
            <td class="pt-3-half" contenteditable="true">{{$valeur->name}}</td>
            <td class="pt-3-half" contenteditable="true">{{$valeur->tele}}</td>
            <td class="pt-3-half" contenteditable="true">{{$valeur->email}}</td>
            <td class="pt-3-half" contenteditable="true">{{$valeur->created_at}}</td>
            
            <td class="pt-3-half">
              <span class="table-remove"><a class="btn btn-primary btn-rounded btn-sm my-0" href="{{url('users/'.$valeur->id.'/details')}}">Details</a></span>
            </td>
            @if($valeur->disp == 0)
            <td class="pt-3-half">
              <span class="table-remove"><a class="btn btn-success btn-rounded btn-sm my-0" href="{{url('users/'.$valeur->id)}}">Valider</a></span>
            </td>
            @endif
            <td class="pt-3-half">
              <span class="table-remove"><a class="btn btn-warning btn-rounded btn-sm my-0" href="{{url('tt/users/'.$valeur->id)}}">Oublier</a></span>
            </td>
            <td>
              <form class="md-form" method="POST" action="{{url('lessons/'.$valeur->id.'/user')}}">
                @csrf
                {{method_field('DELETE')}}
             
                <span class="table-remove"><button class="btn btn-danger btn-rounded btn-sm my-0" type="submit">Supprimer</button></span> </form>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- users table -->
<style type="text/css">
	.pt-3-half {
padding-top: 1.4rem;
}
</style>
<script type="text/javascript">
	const $tableID = $('#table');
 const $BTN = $('#export-btn');
 const $EXPORT = $('#export');

 const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half">
    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
  </td>
  <td>
    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
  </td>
</tr>`;

 $('.table-add').on('click', 'i', () => {

   const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

   if ($tableID.find('tbody tr').length === 0) {

     $('tbody').append(newTr);
   }

   $tableID.find('table').append($clone);
 });

 $tableID.on('click', '.table-remove', function () {

   $(this).parents('tr').detach();
 });

 $tableID.on('click', '.table-up', function () {

   const $row = $(this).parents('tr');

   if ($row.index() === 0) {
     return;
   }

   $row.prev().before($row.get(0));
 });

 $tableID.on('click', '.table-down', function () {

   const $row = $(this).parents('tr');
   $row.next().after($row.get(0));
 });

 // A few jQuery helpers for exporting only
 jQuery.fn.pop = [].pop;
 jQuery.fn.shift = [].shift;

 $BTN.on('click', () => {

   const $rows = $tableID.find('tr:not(:hidden)');
   const headers = [];
   const data = [];

   // Get the headers (add special header logic here)
   $($rows.shift()).find('th:not(:empty)').each(function () {

     headers.push($(this).text().toLowerCase());
   });

   // Turn all existing rows into a loopable array
   $rows.each(function () {
     const $td = $(this).find('td');
     const h = {};

     // Use the headers from earlier to name our hash keys
     headers.forEach((header, i) => {

       h[header] = $td.eq(i).text();
     });

     data.push(h);
   });

   // Output the result
   $EXPORT.text(JSON.stringify(data));
 });</script>

@endsection