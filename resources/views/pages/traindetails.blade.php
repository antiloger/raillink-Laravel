@extends('layout.app')
@section('css-link')
<link rel="stylesheet" href="/asset/css/traindetails/traindetails.css">
@endsection
@section('content')
    
<div class=" container vstack  start-div  " style="background-image: url('{{ asset('storage/main_img/traindetail_head2.jpg') }}');">
        
    <div class="p-2 text-center">
        <h1 id="main-txt" style="font-size: 100px; color:rgb(255, 255, 255);"><strong>Train Details</strong></h1>
    </div>
    <form class="input_box" action="/trainDetails/detailssearch" method="get">
        @csrf
        <div class="input_box d-flex justify-content-center align-items-center">
        <input type="text" placeholder="Write here..." name="news-search" class="input-txt">
        </div>
        <div class="btn-seh d-flex justify-content-center align-items-center">
        <button type="submit" class="button-seh">Search</button>
        </div>
    </form>
</div>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">


        @foreach ($view_data as $data)
            <div class="col">
                <!-- card1 -->
            <div class="card h-100 newscard">
                <div class="row picrow">
                    <div class="col piccol image-container">
                        <img src="{{ asset('storage/'.$data->train_img) }}" class="card-img-top imgnewscard" alt="...">
                    </div>
                </div>
                <div class="card-body">
                <p class="mainnewstag">Train No: {{$data->train_no}}</p>
                <h4 class="card-title "><a class="card-hover" href="/trainDetails/details/{{$data->train_id}}" ><strong>{{$data->train_name}}</strong></a></h4>
                <hr style="margin-top: 0">
                <p>{!!   Str::limit($data->train_dis, 250) !!}</p>
                <p class="card-text datenews">{{$data->created_at->format('Y-m-d')}}</p>
                </div>
            
                    
               
            </div>
            </div>
        @endforeach
        
        
      </div>
    
    </div>
</div>

@endsection