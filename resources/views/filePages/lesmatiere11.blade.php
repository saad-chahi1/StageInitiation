@extends('layouts.template1')

@section('centenu')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


@if(Auth::user()->category == 'Primaire')
<h2 style="color: #e74c3c">{{Auth::user()->niv}}</h2>
<hr style="color: #e74c3c">

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Francais')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Francais/details')}}" class="btn btn-primary" role="button">Français</a>
 @endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Mathematiques')
        <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Mathematiques/details')}}" class="btn btn-secondary" role="button">Mathématiques</a>
 @endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Activite scientifique')
        <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Activite%20scientifique/details')}}" class="btn btn-success" role="button">Activité scientifique</a>
 @endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Education Islamique')
        <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Education%20Islamique/details')}}" class="btn btn-danger" role="button">Education Islamique</a>
 @endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Arabe')
        <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Arabe/details')}}" class="btn btn-info" role="button">Arabe</a>
 @endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Anglais')
        <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Anglais/details')}}" class="btn btn-warning" role="button">Anglais</a>
 @endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Histoire Geographie')
        <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Histoire%20Geographie/details')}}" class="btn btn-light" role="button">Histoire Géographie</a>
 @endif
 @endforeach
<br><br><br><br><br>
@endif
@if(Auth::user()->category == 'Collège')
<h2 style="color: #e74c3c">{{Auth::user()->niv}}</h2>
<hr style="color: #e74c3c">
@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Francais')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Francais/details')}}" class="btn btn-primary" role="button">Français</a>

 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Mathematiques')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Mathematiques/details')}}" class="btn btn-secondary" role="button">Mathématiques</a>

 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Physique et Chimie')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Physique%20et%20Chimie/details')}}" class="btn btn-success" role="button">Physique et Chimie</a>

 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Education Islamique')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Education%20Islamique/details')}}" class="btn btn-danger" role="button">Education Islamique</a>

 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Arabe')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Arabe/details')}}" class="btn btn-info" role="button">Arabe</a>

 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Anglais')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Anglais/details')}}" class="btn btn-warning" role="button">Anglais</a>

 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Histoire Geographie')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Histoire%20Geographie/details')}}" class="btn btn-light" role="button">Histoire Géographie</a>

 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Sciences de la Vie et de la Terre')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Sciences%20de%20la%20Vie%20et%20de%20la%20Terre/details')}}" class="btn btn-dark" role="button">Sciences de la Vie et de la Terre</a>

 @endif
 @endforeach

<br><br><br><br><br>
@endif

@if(Auth::user()->category == 'Lycée')
  
<h2 style="color: #e74c3c">{{Auth::user()->niv}}</h2>
<hr style="color: #e74c3c">
 @foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Francais') 
          <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Francais/details')}}" class="btn btn-primary" role="button">Français</a>
        @endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Mathematiques') 
          <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Mathematiques/details')}}" class="btn btn-secondary" role="button">Mathématiques</a>
        @endif
 @endforeach

 @foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Physique et Chimie') 
           <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Physique%20et%20Chimie/details')}}" class="btn btn-success" role="button">Physique et Chimie</a>
        @endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Education Islamique') 
           <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Education%20Islamique/details')}}" class="btn btn-danger" role="button">Education Islamique</a>
        @endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
                 @if($model =='Arabe') 
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Arabe/details')}}" class="btn btn-info" role="button">Arabe</a>
@endif
@endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
                 @if($model =='Anglais') 
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Anglais/details')}}" class="btn btn-warning" role="button">Anglais</a>
 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
                 @if($model =='Histoire Geographie') 
                 <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Histoire%20Geographie/details')}}" class="btn btn-light" role="button">Histoire Géographie</a>
 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
                 @if($model =='Philosophie') 
                 <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Philosophie/details')}}" class="btn btn-dark" role="button">Philosophie</a>
 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
                 @if($model =='Sciences de la Vie et de la Terre') 
                 <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Sciences%20de%20la%20Vie%20et%20de%20la%20Terre/details')}}" class="btn btn-primary" role="button">Sciences de la Vie et de la Terre</a>
 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
                 @if($model =='Economie et Organisation Administrative des Entreprises') <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Economie%20et%20Organisation%20Administrative%20des%20Entreprises/details')}}" class="btn btn-secondary" role="button">Economie et Organisation Administrative des Entreprises</a>
 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
                 @if($model =='Comptabilite et Mathematiques financieres') 
                 <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Comptabilite%20et%20Mathematiques%20financieres/details')}}" class="btn btn-success" role="button">Comptabilité et Mathématiques financières</a>
 @endif
 @endforeach
@foreach(json_decode(Auth::user()->mat) as $model)
                 @if($model =='Economie generale et Statistiques') 
                 <a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Economie%20generale%20et%20Statistiques/details')}}" class="btn btn-danger" role="button">Economie générale et Statistiques</a>
 @endif
 @endforeach
<br><br><br><br><br>
@endif
@if(Auth::user()->category == 'CPGE ou University')
<h2 style="color: #e74c3c">{{Auth::user()->niv}}</h2>
   <hr style="color: #e74c3c">

 @foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Physique et Chimie')  
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Physique%20et%20Chimie/details')}}" class="btn btn-primary" role="button">Physique et Chimie</a>
@endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Mathematiques')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Mathematiques/details')}}" class="btn btn-secondary" role="button">Mathématiques</a>
@endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =="Sciences Industrielles de l'Ingenieur")
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Sciences%20Industrielles%20de%20l%27Ingenieur/details')}}" class="btn btn-success" role="button">Sciences Industrielles de l'Ingénieur</a>
@endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Genie Informatique')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Genie%20Informatique/details')}}" class="btn btn-danger" role="button">Génie Informatique</a>
@endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Genie Mecanique')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Genie%20Mecanique/details')}}" class="btn btn-info" role="button">Génie Mécanique</a>
@endif
 @endforeach

@foreach(json_decode(Auth::user()->mat) as $model)
        @if($model =='Genie Electrique')
<a href="{{url('lessons/'.Auth::user()->category.'/to/'.Auth::user()->niv.'/Genie%20Electrique/details')}}" class="btn btn-warning" role="button">Génie Electrique</a>
@endif
 @endforeach

<br><br><br><br><br>
@endif

@endsection