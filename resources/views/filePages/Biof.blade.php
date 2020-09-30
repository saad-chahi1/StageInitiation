@extends('layouts.template1')

@section('centenu')
<style type="text/css">
	body{
		background-color:#2c292f;
	}
	.elements {
		background-color:white;
		width: 47%;
		border:2px solid #e74c3c;
		padding: 18px;
		height: 41%;
		font-size: 18.509px;
	}
	#conteneur{
    display: flex;
    margin:5px;
    padding: 7px;
    margin-top: 15px;
    }
    h2{
    	color: #e74c3c;
    	text-align: center;
    }
    .element{
    	width: 49%;
		border:2px solid #2c292f;
		height: 35%;
    }
    .elementss{
    	padding: 20px;
    }
    .pho{
    	position: relative;
    	width: 98%;
    	padding: 11px;
    }
    .cen{
    	text-align: center;
    	color: white;
    }
    .divcen{
    	width: 70%;
    	margin-left: 15%;
    }
</style>
<br><br>

<div id="conteneur" >

    <div class="element 1" >
        <img src="images/eb3z2X.jpg" style="height:710px ; width: 600px" />
    </div>
    <div class="elementss">
    	
    </div>

    <div class="elements 2"> 
        <br><br>
    	<h2>UNIVERSITAIRE</h2>
        <br>
    	<p>TDM propose des cours en ligne, individuels ou en petits groupes pour permettre à chacun d'améliorer ses compétences, mais aussi les méthodes pratiques qui sont la clé de la réussite au supérieur. Adaptés à tous les niveaux, les cours de soutiens TDM sont assurés par des enseignants, des ingénieurs, doctorant spécialisés dans leur domaine pour vous assurer un accompagnement complet et répondre à vos besoins.</p>
    	<p>- Vous bénéficiez d'un programme personnalisé et sur mesure quelque soit le niveau.</p>
    	<p>- Des meilleurs enseignants sélectionnés et adaptés à votre profil.</p>
    	<p>- Des cours adaptés suivant l'emploi du temps de l'élève et du professeur.</p>
    	<p>Grâce à TDM, vous observerez des résultats positifs très rapidement !</p>
        <br><br><br><br><br><br><br><br><br>
    </div>

</div>
<br><br>
<div id="conteneur" >

     <div class="elements 2">
     <br> 
    	<h2>CPGE</h2>
        <br>
    	<p>Classes Préparatoires aux grandes écoles. La voix dite " royale " pour un bachelier qui souhaite intégrer une école de prestige Française ou Marocaine.</p>
    	<p>TDM propose des cours.</p>
    	<p>- Individuels au centre ou à domicile.</p>
    	<p>- En ligne.</p>
        <p>- En groupe restreints.</p>
        <br>
        <p>Dans les matières de votre choix et ce quelque soit votre filière, scientifique, économique ou littéraire.</p>
        <br><br><br><br><br><br><br><br><br>
    </div>
    <div class="elementss">
    	
    </div>

   <div class="element 1" >
        <img src="images/V6AHnY.jpg" style="height:700px; width: 600px" />
    </div>

</div>
<br><br>


<p class="cen">Vous souhaitez en savoir plus sur nous ? Appelez-nous aujourd'hui.</p>

<hr>
<hr>
</div>
@endsection