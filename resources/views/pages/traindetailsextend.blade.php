@extends('layout.app')
@section('css-link')
<link rel="stylesheet" href="/asset/css/traindetails/traindetailsextend.css">
@endsection
@section('content')

<div class=" container start-div  " style="background-image: url('{{ asset('storage/'.$data->train_img) }}')">

</div>
<br>
<br>
<div class="container">
  <div class="row" id="trainno-head" style="margin: 0px;">
    Train No: {{$data->train_no}}
  </div>
  <div class="row">
    <h1 id="train-head-title"><strong>{{$data->train_name}}</strong></h1>
  </div>
</div>


<div class="container  con-tile" id="description">
  <div class="row">
    {!! $data->train_dis !!}
  </div>
</div>

<div class="container con-tile ">
  <div class="row">
    <div class="col">
      <h6 style="margin: 0,0; color:rgb(10, 163, 209);">Train type :</h6>
    </div>
  </div>
  <div class="col-8">
    <h5 style="margin: 0;" ><a href="/trainArticle/details/{{$data->train_type_link}}" style="color: black;">{{$data->train_type}}</a></h5>
    *click to learn more
  </div>
</div>

<div class="container con-tile ">
  <div class="row">
    <div class="col">
      <h6 style="margin: 0,0; color:rgb(10, 163, 209);">Train No :</h6>
    </div>
  </div>
  <div class="col-8">
    <h5 style="margin: 0;">{{$data->train_no}}</h5>
    
  </div>
</div>

<div class="container con-tile ">
  <div class="row">
    <div class="col">
      <h6 style="margin: 0,0; color:rgb(10, 163, 209);">Operating Days :</h6>
    </div>
  </div>
  <div class="col-8">
    <h5 style="margin: 0;">{{$data->train_opdays}}</h5>
  </div>
</div>

<div class="container con-tile ">
  <div class="row">
    <div class="col">
      <h6 style="margin: 0,0; color:rgb(10, 163, 209);">Available Classes :</h6>
    </div>
  </div>
  <div class="col-8">
    <h5 style="margin: 0;">{{$data->train_avclass}}</h5>
  </div>
</div>
@if ($data->train_stops_no)
    
<div class="container con-tile ">
  <div class="row">
    <div class="col">
      <h6 style="margin: 0,0; color:rgb(10, 163, 209);">Number of Stops :</h6>
    </div>
  </div>
  <div class="col-8">
    <h5 style="margin: 0;">{{$data->train_stops_no}}</h5>
    <a data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      show stops
    </a>
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        {{$data->train_stops}}
      </div>
    </div>
  </div>
</div>

@endif

@if ($data->train_time)
   
<div class="container con-tile ">
  <div class="row">
    <div class="col">
      <h6 style="margin: 0,0; color:rgb(10, 163, 209);">Journey Duration :</h6>
    </div>
  </div>
  <div class="col-8">
    <h5 style="margin: 0;">{{$data->train_time}}</h5>
  </div>
</div>

@endif

@if ($data->train_facilites)

<div class="container con-tile ">
  <div class="row">
    <div class="col">
      <h6 style="margin: 0,0; color:rgb(10, 163, 209);">Facilites :</h6>
    </div>
  </div>
  <div class="col-8">
    {!! $data->train_facilites !!}
  </div>
</div>
 
@endif

@if ($data->train_more)
<div class="container con-tile ">
  <div class="row">
    <div class="col">
      <h6 style="margin: 0,0; color:rgb(10, 163, 209);">More :</h6>
    </div>
  </div>
  <div class="col-8">
    {!! $data->train_more !!}
  </div>
</div>
@endif






<br>
<br>
<br>

@endsection