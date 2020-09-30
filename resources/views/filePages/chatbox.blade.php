@extends('layouts.template1')

@section('centenu')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <html>
  <button type="button" class="btn btn-warning" ><a href="#down" class="scroDown">Scroll Down</a></button>
<div class="container bootstrap snippets">
<div class="col-md-7 col-xs-12 col-md-offset-2">

  <!-- Panel Chat -->

  <div class="panel" id="chat">
    <div class="panel-heading">
      <h3 class="panel-title" style="text-align: center">
        <i class="icon wb-chat-text" aria-hidden="true"></i> TDM messagerie
      </h3>
    </div>
    <hr>
    <div class="panel-body">
      <div class="chats">
      	@foreach ($message1 as $mes1)
      	  
      	@if($mes1->id2==Auth::user()->id and $mes1->id1==$tod1)
        <div class="chat">
          <div class="chat-avatar">
            <a class="avatar avatar-online" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="June Lane">
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="...">
              <i></i>
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>
                {{$mes1->message}}
              </p>
              <time class="chat-time" datetime="2015-07-01T11:37">{{$mes1->created_at}}</time>
            </div>
          </div>
        </div>
        @endif
        @if($mes1->id2==$tod1 and $mes1->id1==Auth::user()->id)
        <div class="chat chat-left">
          <div class="chat-avatar">
            <a class="avatar avatar-online" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="Edward Fletcher">
              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="...">
              <i></i>
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>{{$mes1->message}}</p>
              <time class="chat-time" datetime="2015-07-01T11:39">{{$mes1->created_at}}</time>
            </div>
          </div>
        </div>
        
        @endif
        @endforeach
      </div>
    </div>
    <div class="panel-footer">

      <form class="md-form" method="POST" action="{{url('messages/'.$tod1.'/to/'.Auth::user()->id)}}" enctype="multipart/form-data">
      	 @csrf
        <div class="input-group" id="down">
          <input type="text" class="form-control" placeholder="Say something" name="msg">
          <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">Envoyer</button>
          </span>
        </div>
      </form>
    </div>
  </div>
  
  <!-- End Panel Chat -->

</div>
</div>
</html>

<style type="text/css">

	html {
  scroll-behavior: smooth;
 }
 
 a {
  text-decoration: none;
  color: black;
 } 



	body {
background:#ddd;
}
	.col-md-7{
		position: relative;
		width: 125%;
		margin-left: 20%;
		background-color: white;
		border: 2px solid red;
  padding: 10px;
  border-radius: 25px; 
	}
	.chat-box {
    height: 100%;
    width: 100%;
    background-color: #fff;
    overflow: hidden
}

.chats {
    padding: 30px 15px
}

.chat-avatar {
    float: right
}

.chat-avatar .avatar {
    width: 30px
        -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
}

.chat-body {
    display: block;
    margin: 10px 30px 0 0;
    overflow: hidden
}

.chat-body:first-child {
    margin-top: 0
}

.chat-content {
    position: relative;
    display: block;
    float: right;
    padding: 5px 10px;
    margin: 0 15px 7px 0;
    clear: both;
    color: #fff;
    background-color: #62a8ea;
    border-radius: 4px;
        -webkit-box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
    box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
}

.chat-content:before {
    position: absolute;
    top: 10px;
    right: -10px;
    width: 0;
    height: 0;
    content: '';
    border: 5px solid transparent;
    border-left-color: #62a8ea
}

.chat-content>p:last-child {
    margin-bottom: 0
}

.chat-content+.chat-content:before {
    border-color: transparent
}

.chat-time {
    display: block;
    margin-top: 4px;
    color: rgba(255, 255, 255, .6)
}

.chat-left .chat-avatar {
    float: left
}

.chat-left .chat-body {
    margin-right: 0;
    margin-left: 30px
}

.chat-left .chat-content {
    float: left;
    margin: 0 0 10px 10px;
    color: #76838f;
    background-color: #dfe9ef
}

.chat-left .chat-content:before {
    right: auto;
    left: -10px;
    border-right-color: #dfe9ef;
    border-left-color: transparent
}

.chat-left .chat-content+.chat-content:before {
    border-color: transparent
}

.chat-left .chat-time {
    color: #a3afb7
}

.panel-footer {
    padding: 0 30px 15px;
    background-color: transparent;
    border-top: 1px solid transparent;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
.avatar img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border: 0 none;
    border-radius: 1000px;
}
.chat-avatar .avatar {
    width: 30px;
}
.avatar {
    position: relative;
    display: inline-block;
    width: 40px;
    white-space: nowrap;
    border-radius: 1000px;
    vertical-align: bottom;
}
</style>

@endsection