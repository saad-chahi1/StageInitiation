@extends('layouts.template1')

@section('centenu')
<style type="text/css">
	html, body{
  background-color: white;
      color: #2c292f;
	}
	.une,.trois,.deux,.quatre{
		width: 50%;
		text-align: center;
		padding-left: 24%;
	}
	
	h1{
		color: red;
	}
	.pp{
		font-size: 26px;
	}
	.leftimg{
        padding-left: 10%;
	}
	.rightimg{
        padding-right: 10%;
	}
	.center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .footgg{
    	padding: 10px;
    	background-color: #e74c3c;
    	color: white;
    	text-align: left;
    	margin-bottom: -80px;
    	font-size: 25px;
    }
    .footgg h3{
    	padding-left: 50px;
    }
    .footgg p{
    	padding-left: 30px;
    }
    
	
</style>

	<div class="une">
	<h1>Nos Ateliers</h1>
	<p class="pp" >Les ateliers TDM ont pour objectif de libérer l'esprit des enfants et des adolescents, et leur permettre d'exploiter leur créativité et développer leur capacité d'analyse tout en prenant plaisir.</p></div>
	<img src="images/enfants-ecole.jpg" style="float:left" width="20%" class="leftimg" height="150px">
	<img src="images/inscrire-un-enfant-a-lecole-maternelle.jpg" style="float:right" width="20%" class="rightimg" height="150px">
<br><br><br><br><br><br><br><br>
	<div class="deux">
	<h1>Code For Kids</h1>
	<p class="pp">Apprendre à utiliser l'outil informatique est un rêve pour chaque enfant. TDM propose les ateliers CFK ( Code for Kids ), Nos enfants âgés entre 6 ans et 12 ans seront initiés aux bases de la logique et de l'algorithme pour enfant, cela leur permettra de réaliser leur premier projet personnel en informatique.</p><p class="pp">Cours individuels, Cours en groupe, Cours en ligne</p></div>
	<img src="images/barefoot-computing-explainer-136429694447902601-180921121405.jpg" style="float:left" width="20%" class="leftimg" height="150px">
	<img src="images/unnamed.jpg" style="float:right" width="20%" class="rightimg" height="150px">
<br><br><br><br><br><br><br><br>

	<div class="trois">
	<h1>Code For Teens</h1>
	<img src="images/Home-Study-Health-Tips-1.jpg" width="40%" class="center" height="150px">
	<p class="pp">Devenir un magicien en informatique est un rêve pour chaque adolescent. TDM propose les ateliers CFT ( Code for Teens). Dés l'age de 13 ans nos jeunes padawan seront initiés aux bases de la logique, l'algorithme et la programmation, cela leur permettra de réaliser leur premier projet personnel en informatique.</p></div>
<br><br>

	<div class="quatre">
	<h1>Les maths par la méthode Singapour</h1>
	<img src="images/25060-1365x748.jpg" width="40%" class="center" height="150px">
	<p class="pp">Connu dans le monde entier par son excellence,    faire les maths par la méthode Singapour a pour objectif principal d'offrir à votre enfant l'occasion d'apprendre à analyser, raisonner pour résoudre un problème mathématique.</p></div>
<div class="footgg">
	<h2 style="text-align: center">LES ATELIERS TDM</h2>
    <h3 >Le centre TDM propose des ateliers ludiques pour:</h3>
   	<p> Enfants </p>
   	<p>Adolescents</p>
   	<p>Entreprises</p>
   <p>
   <p><h3 >Nous proposons des formules flexibles, nos ateliers sont:</h3>
   	<p>En Individuels </p>
   	<p>En Groupe</p>
   	<p>En ligne</p>
</div>
   


@endsection