@extends('layouts.template1')

@section('centenu')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
  <div class="col-lg-12">
    <div class="main-box clearfix">
      <div class="table-responsive">
        <table class="table user-list">
          <thead>
            <tr>
              <th><span>User</span></th>
              <th><span>Created at</span></th>
              <th class="text-center"><span>Niveau</span></th>
               <th class="text-center"><span>Matiere</span></th>
              <th><span>Email</span></th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $value)
            @if($value->id != Auth::user()->id)
            <tr>
              <td>  
                <img src="{{ asset('storage/'.$value->photo)}}" alt="" width="280px">
                
                <a href="{{url('users/'.$value->id.'/details')}}" class="user-link">{{$value->name}}</a>
                @if($value->id == 4)
                <span class="user-subhead">Admin</span>
                @endif
              </td>
              <td>
                {{$value->created_at}}
              </td>
              <td class="text-center">
                <span class="label label-default">{{$value->niv}}</span>
              </td>
              <td class="text-center">
                <span class="label label-default">{{$value->mat}}</span>
              </td>
              <td>
                <p>{{$value->email}}</p>
              </td>
              <td style="width: 8%;" class="yellow">
                
                <a href="{{url('boitechat/'.$value->id.'/to/'.Auth::user()->id)}}">
                  <main rel="main">
  <div class="notification">
    <svg viewbox="0 0 166 197">
      <path d="M82.8652955,196.898522 C97.8853137,196.898522 110.154225,184.733014 110.154225,169.792619 L55.4909279,169.792619 C55.4909279,184.733014 67.8452774,196.898522 82.8652955,196.898522 L82.8652955,196.898522 Z" class="notification--bellClapper"></path>
    <path d="M146.189736,135.093562 L146.189736,82.040478 C146.189736,52.1121695 125.723173,27.9861651 97.4598237,21.2550099 L97.4598237,14.4635396 C97.4598237,6.74321823 90.6498186,0 82.8530327,0 C75.0440643,0 68.2462416,6.74321823 68.2462416,14.4635396 L68.2462416,21.2550099 C39.9707102,27.9861651 19.5163297,52.1121695 19.5163297,82.040478 L19.5163297,135.093562 L0,154.418491 L0,164.080956 L165.706065,164.080956 L165.706065,154.418491 L146.189736,135.093562 Z" class="notification--bell"></path>
    </svg>
    @foreach($msg as $msg1)
    @if( $value->id == $msg1->id2)
    <span class="notification--num">1</span>
    @endif
    @endforeach
  </div>
  
</main>

                </a>
               
              </td>
            </tr>
            @endif
            @endforeach
                       
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>


<style type="text/css">
main {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50%;
  width: 15%;
  left: 33%;
  position: relative;
}
.yellow :hover {
  background-color: #f5f6fa ;
}
main .notification {
  position: relative;
  width: 1em;
  height: 1em;
}
main .notification svg {
  width: 2em;
  height: 2em;
}
main .notification svg > path {
  fill: #2c3e50;
}
main .notification--bell {
  animation: bell 2.2s linear infinite;
  transform-origin: 50% 0%;
}
main .notification--bellClapper {
  animation: bellClapper 2.2s 0.1s linear infinite;
}
main .notification--num {
  position: absolute;
  top: 7%;
  left: 69%;
  font-size: 1rem;
  border-radius: 50%;
  width: 1.15em;
  height: 1.15em;
  background-color: #e74c3c;
  border: 2px solid #5079b1;
  color: #FFFFFF;
  text-align: center;
  line-height: 1.2em;
  animation: notification 3.2s ease;
}

@keyframes bell {
  0%, 25%, 75%, 100% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(8deg);
  }
  45% {
    transform: rotate(-8deg);
  }
  55% {
    transform: rotate(4deg);
  }
  60% {
    transform: rotate(-4deg);
  }
}
@keyframes bellClapper {
  0%, 25%, 75%, 100% {
    transform: translateX(0);
  }
  40% {
    transform: translateX(-0.25em);
  }
  45% {
    transform: translateX(0.25em);
  }
  55% {
    transform: translateX(-0.15em);
  }
  60% {
    transform: translateX(0.15em);
  }
}
@keyframes notification {
  0%, 25%, 75%, 100% {
    opacity: 1;
  }
  30%, 70% {
    opacity: 0;
  }
}

 

  /* USER LIST TABLE */
  .user-list{
    width: 95%;
    margin: 10px;
  }
.user-list tbody td > img {
    position: relative;
  max-width: 50px;
  float: left;
  margin-right: 15px;
}
.user-list tbody td .user-link {
  display: block;
  font-size: 1.25em;
  padding-top: 3px;
  margin-left: 60px;
}
.user-list tbody td .user-subhead {
  font-size: 0.885em;
  font-style: italic;
}

/* TABLES */
.table {
    border-collapse: separate;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #eee;
}
.table thead > tr > th {
  border-bottom: 1px solid #C2C2C2;
  padding-bottom: 0;
}
.table tbody > tr > td {
  font-size: 0.875em;
  background: #f5f6fa;
  border-top: 10px solid #fff;
  vertical-align: middle;
  padding: 12px 8px;
}
.table tbody > tr > td:first-child,
.table thead > tr > th:first-child {
  padding-left: 20px;
}
.table thead > tr > th span {
  border-bottom: 2px solid #C2C2C2;
  display: inline-block;
  padding: 0 5px;
  padding-bottom: 5px;
  font-weight: normal;
}
.table thead > tr > th > a span {
  color: #344644;
}
.table thead > tr > th > a span:after {
  content: "\f0dc";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  margin-left: 5px;
  font-size: 0.75em;
}
.table thead > tr > th > a.asc span:after {
  content: "\f0dd";
}
.table thead > tr > th > a.desc span:after {
  content: "\f0de";
}
.table thead > tr > th > a:hover span {
  text-decoration: none;
  color: #2bb6a3;
  border-color: #2bb6a3;
}
.table.table-hover tbody > tr > td {
  -webkit-transition: background-color 0.15s ease-in-out 0s;
  transition: background-color 0.15s ease-in-out 0s;
}
.table tbody tr td .call-type {
  display: block;
  font-size: 0.75em;
  text-align: center;
}
.table tbody tr td .first-line {
  line-height: 1.5;
  font-weight: 400;
  font-size: 1.125em;
}
.table tbody tr td .first-line span {
  font-size: 0.875em;
  color: #969696;
  font-weight: 300;
}
.table tbody tr td .second-line {
  font-size: 0.875em;
  line-height: 1.2;
}
.table a.table-link {
  margin: 0 5px;
  font-size: 1.125em;
}
.table a.table-link:hover {
  text-decoration: none;
  color: #2aa493;
}
.table a.table-link.danger {
  color: #fe635f;
}
.table a.table-link.danger:hover {
  color: #dd504c;
}

a{
  text-decoration: none;
}

.table-products tbody > tr > td {
  background: none;
  border: none;
  border-bottom: 1px solid #ebebeb;
  -webkit-transition: background-color 0.15s ease-in-out 0s;
  transition: background-color 0.15s ease-in-out 0s;
  position: relative;
}
.table-products tbody > tr:hover > td {
  text-decoration: none;
  background-color: #f6f6f6;
}
.table-products .name {
  display: block;
  font-weight: 600;
  padding-bottom: 7px;
}
.table-products .price {
  display: block;
  text-decoration: none;
  width: 50%;
  float: left;
  font-size: 0.875em;
}
.table-products .price > i {
  color: #8dc859;
}
.table-products .warranty {
  display: block;
  text-decoration: none;
  width: 50%;
  float: left;
  font-size: 0.875em;
}
.table-products .warranty > i {
  color: #f1c40f;
}
.table tbody > tr.table-line-fb > td {
  background-color: #9daccb;
  color: #262525;
}
.table tbody > tr.table-line-twitter > td {
  background-color: #9fccff;
  color: #262525;
}
.table tbody > tr.table-line-plus > td {
  background-color: #eea59c;
  color: #262525;
}
.table-stats .status-social-icon {
  font-size: 1.9em;
  vertical-align: bottom;
}
.table-stats .table-line-fb .status-social-icon {
  color: #556484;
}
.table-stats .table-line-twitter .status-social-icon {
  color: #5885b8;
}
.table-stats .table-line-plus .status-social-icon {
  color: #a75d54;
}
.container{
  font-size: 20px;
}
</style>
  @endsection