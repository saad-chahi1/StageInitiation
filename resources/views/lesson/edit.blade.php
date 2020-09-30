@extends('layouts.template1')

@section('centenu')
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<form class="md-form" method="POST" action="{{url('lessons/'.$lesson->id)}}">
  <input type="hidden" name="_method" value="PUT">

  @csrf

<div class="container">
  <div class="row">
      <div class="col-6 col-md-4">

        <label>séléctionner le niveau (lycée):</label>
        <select class="selectpicker" data-style="btn-info" name="niveau" value="{{$lesson->niveau}}">
          <option>1ère année</option>
          <option>2ème année (1èr bac)</option>
          <option>3ème année (baccalauréat)</option>  
        </select>
        
      </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
      <div class="col-6 col-md-4">

        <label>séléctionner la matiére</label>
        <select class="selectpicker" data-style="btn-info" name="matiere" value="{{$lesson->matiere}}">
          <option>MATH</option>
          <option>PC</option>
          <option>SVT</option>  
        </select>
        
      </div>
  </div>
</div>
<br>

<!-- titre -->
<label for="male">Le titre</label>
    <input required name="titre"  type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="titre" value="{{$lesson->titre}}">
<!-- commentaire -->
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Commentaire</label>
    <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire" value="{{$lesson->comm}}"></textarea>
  </div>

<!-- le fichier -->
<label for="male">Le fichier</label>
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <input type="file" name="fichier" value="{{$lesson->fichier}}">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" placeholder="Upload your file">
    </div>
  </div>


    <button class="btn btn-info btn-block my-4" type="submit" >Modifier</button>
</form>

<style type="text/css">
	$muted: #6c757d;

body {
  margin: 2rem 0rem;
  
  label {
    color: $muted;
    display: block;
    margin-top: 2rem;
  }
}
</style>


@endsection