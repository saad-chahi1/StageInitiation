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

<form class="md-form" method="POST" action="{{url('lessons')}}" enctype="multipart/form-data" >

  @csrf

<div id="block_container">
<div class="container" >
  <div class="row">
      <div class="col-6 col-md-4">

        <label>Diriger vers:</label>
        <select class="selectpicker" data-style="btn-info" name="category">
          <option>Primaire</option>
          <option>Collège</option>
          <option>Lycée</option>  
          <option>CPGE ou University</option> 
        </select>
        
      </div>
  </div>
</div>
<br><br>

    <div class="container" >
  <div class="row">
      <div class="col-6 col-md-4">

        <label style="width: 410px;">séléctionner le niveau (Primaire & Collège & Lycée):</label>
        <select class="selectpicker" data-style="btn-info" name="niveau">
          <option>1ère année</option>
          <option>2ème année</option>
          <option>3ème année</option>  
          <option>4ème année (Primaire)</option> 
          <option>5ème année (Primaire)</option> 
          <option>6ème année (Primaire)</option> 
        </select>
        
      </div>
  </div>
</div>
</div>
<br><br>
<div id="block_container">
 <div class="container" >
  <div class="row" >
      <div class="col-6 col-md-4" >

        <label style="border: 2px solid #e74c3c; width: 210px;" >séléctionner la matiére (Collège & Lycée):</label><br>
          <label style="width: 140px;"><input type="checkbox" name="matiere" value="Mathematiques">Mathématiques</label>
          <label style="width: 165px;"><input type="checkbox" name="matiere" value="Physique et Chimie">Physique et Chimie</label>
          <label style="width: 175px;"><input type="checkbox" name="matiere" value="Sciences de la Vie et de la Terre">Sciences de la Vie et de la Terre</label>
          <label style="width: 61px;"><input type="checkbox" name="matiere" value="Arabe">Arabe</label> 
          <label style="width: 81px;"><input type="checkbox" name="matiere" value="Francais">Français</label>
          <label style="width: 75px;"><input type="checkbox" name="matiere" value="Anglais">Anglais</label>
          <label style="width: 180px;"><input type="checkbox" name="matiere" value="Histoire Geographie">Histoire Géographie</label>
          <label style="width: 180px;"><input type="checkbox" name="matiere" value="Education Islamique">Education Islamique</label>
          <label style="width: 112px;"><input type="checkbox" name="matiere" value="Philosophie">Philosophie</label> 
          <label style="width: 117px;"><input type="checkbox" name="matiere" value="Economie et Organisation Administrative des Entreprises">Economie et Organisation Administrative des Entreprises</label>
          <label style="width: 117px;"><input type="checkbox" name="matiere" value="Comptabilite et Mathematiques financieres">Comptabilité et Mathématiques financières </label>
          <label style="width: 170px;"><input type="checkbox" name="matiere" value="Economie generale et Statistiques">Economie générale et Statistiques</label>
        </select>
        
      </div>
  </div>
</div>
<br><br>
<div class="container">
  <div class="row">
      <div class="col-6 col-md-4">

         <label style="border: 2px solid #e74c3c; width: 210px;">séléctionner la matiére (Primaire):</label><br>
          <label style="width: 140px;"><input type="checkbox" name="matiere" value="Mathematiques">Mathématiques</label>
          <label style="width: 172px;"><input type="checkbox" name="matiere" value="Activite scientifique">Activité scientifique</label>
          <label style="width: 180px;"><input type="checkbox" name="matiere" value="Education Islamique">Education Islamique</label>  
          <label><input type="checkbox" name="matiere[]" value="Arabe">Arabe</label>
          <label style="width: 81px;"><input type="checkbox" name="matiere" value="Francais">Français</label> 
          <label style="width: 75px;"><input type="checkbox" name="matiere" value="Anglais">Anglais</label> 
          <label style="width: 180px;"><input type="checkbox" name="matiere" value="Histoire Geographie">Histoire Géographie</label> 
        </select>
        
      </div>
  </div>
</div>
<br><br>
 <div class="container">
  <div class="row">
      <div class="col-6 col-md-4">

         <label style="border: 2px solid #e74c3c; width: 210px;">séléctionner la matiére (CPGE ou University):</label><br>
          <label style="width: 140px;"><input type="checkbox" name="matiere" value="Mathematiques">Mathématiques</label>
          <label style="width: 165px;"><input type="checkbox" name="matiere" value="Physique et Chimie">Physique et Chimie</label>
          <label style="width: 186px;"><input type="checkbox" name="matiere" value="Sciences Industrielles de l'Ingenieur">Sciences Industrielles de l'Ingénieur</label>  
          <label style="width: 175px;"><input type="checkbox" name="matiere" value="Genie Informatique">Génie Informatique</label>  
          <label style="width: 160px;"><input type="checkbox" name="matiere" value="Genie Mécanique">Génie Mécanique</label> 
          <label style="width: 150px;"><input type="checkbox" name="matiere" value="Genie Electrique">Génie Electrique</label> 
        </select>
        
      </div>
  </div>
</div>
</div>
<br>

<!-- titre -->
<label for="male">Le titre</label>
    <input required name="titre" type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="titre" name="titre">
<!-- commentaire -->
 <div class="form-group">
    <label for="exampleFormControlTextarea1">Commentaire</label>
    <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire"></textarea>
  </div>

<!-- le fichier -->
<label for="male">Le fichier</label>
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <input required type="file" name="fichier">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" placeholder="Upload your file">
    </div>
  </div>


    <button class="btn btn-info btn-block my-4" type="submit" >Envoyer</button>
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
 form{
      width: 90%;
      padding-left: 10%;
     }
     #block_container {
    display: flex;
}
</style>


@endsection