@extends('layouts.template1')

@section('centenu')
<br><br>
<div class="row">
  <div class="column1">
    <a href="{{ url('/mes-info') }}"><img src="images\mesInformationsPicto2.png" alt="Snow" style="width:80%" height="240px"><div class="column3"><h2>Voir vos informations</h2></div></a>
  </div>
  <div class="column2">
    <a href="{{ url('lessons') }}"><img src="images\livres.jpeg" alt="Forest" style="width:80%" height="240px"><div class="column3"><h2>Voir vos cours</h2></div></a>
    
  </div>
  </div>

<style>
* {
  box-sizing: border-box;
}

.column1 {
  float: left;
  width: 33.33%;
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 18px #888888;
	text-align: center;


}

.column2 {
  float: left;
  width: 33.33%;
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 18px #888888;
	text-align: center;

}
.column3{
  float: left;
  width: 100%;
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 18px #888888;
  color: 
}
div{
	padding-left: 12%;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  padding: 25px;
  display: table;
}
</style>
@endsection