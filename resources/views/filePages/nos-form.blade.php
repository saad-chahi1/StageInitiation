@extends('layouts.template1')

@section('centenu')

<style type="text/css">
	#conteneur
{
    display: flex;
    flex-wrap: nowrap;
    
}

.element2,.element4{
	background-color: #e74c3c;
	color: white;
	padding-right: 2%;
	padding-left: 2%;
	padding-top: 4%;
	padding-bottom: 4%;
	width: 45%;
}
.element11,.element31{
	background-color: #e74c3c;
	color: white;
	width: 84%;
	padding-right: 1%;
	padding-left: 1%;
	padding-top: 3%;
	padding-top: -2%;
}

</style>


  <div class="fok">
  	<h1 style="text-align: center; color: #e74c3c;">LES OFFRES TDM</h1>
    <p style="text-align: center; color: #e74c3c;"><span >Apprendre tout en étant libre</span></p>
  </div>
  <br><br>
  <div id="conteneur">

    <div class="element2 cd"> <h3 style="text-align: center;">INDIVIDUELS</h3>
        <p style="text-align: center;">Des cours 100% individuels que cela soit au centre ou à domicile ou même en ligne.
Plusieurs matières sont disponibles et ce pour tous les niveaux.</p> </div>
    <div class="element3 cd"><img src="images/inscrire-un-enfant-a-lecole-maternelle.jpg" style="float:right" width="100%" class="rightimg" height="316px"> </div>
    <div class="element4 cd"> <h3 style="text-align: center;">GROUPE DE 3</h3>
        <p style="text-align: center;">Profitez de nos cours en groupe de 3 tout en étant libre, vous pouvez être 1 ou 2 jusqu'à 3 élèves en classe.
Plusieurs matières sont disponibles quelque soit votre niveau.</p> </div>
</div>
<br><br><br>
<div id="conteneur">
    <div class="element11 cd"><h3 style="text-align: center;">EN LIGNE</h3>
        <p style="text-align: center;">Vous êtes dans un pays étranger ou vous n'avez pas la possibilité de vous déplacer, on vous offre la possibilité de prendre des cours en ligne dans plusieurs matières.</p>  </div>
    <div class="element21 cd"><img src="images/25060-1365x748.jpg" width="100%" class="center" height="312px"> </div>
    <div class="element31 cd"> <h3 style="text-align: center;">GROUPE DE 6</h3>
        <p style="text-align: center;">Profitez des meilleurs tarifs et la meilleur qualité de cours en Mathématiques et Physique Chimie, pour les niveaux Primaire, Collège, Lycée et Classe Prépa en groupe ne dépassant pas 6 par classe.
L'aide aux devoirs pour un suivi régulier DE 1 à 3 fois par semaine pour le primaire et collège.</p> </div>
    
</div>

  

@endsection