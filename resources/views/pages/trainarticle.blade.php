@extends('layout.app')

@section('css-link')
<link rel="stylesheet" href="/asset/css/pagestyle.css">
@endsection


@section('content')
<body>
    <!-- page head -->
    <div class=" container vstack  start-div  " style="background-image: url('{{ asset('storage/main_img/traindetail_head5.jpg') }}');">
            
        <div class="p-2 text-center">
            <h1 id="main-txt" style="font-size: 100px; color:rgb(255, 255, 255);"><strong>Train Article</strong></h1>
            <br>
            <br>
        </div>
        <form class="input_box" action="/trainArticle/articlesearch" method="get">
            @csrf
            <div class="input_box d-flex justify-content-center align-items-center">
            <input type="text" placeholder="Write here..." name="news-search" class="input-txt">
            </div>
            <div class="btn-seh d-flex justify-content-center align-items-center">
            <button type="submit" class="button-seh">Search</button>
            </div>
        </form>
    </div>
    <!-- page head end-->
    <br>
    <br>
    <br>
    <h1 id="resulter">Searched result: {{count($view_data)}}</h1>
    <!--cards-->
    <br>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">


        @foreach ($view_data as $data)
            <div class="col">
                <!-- card1 -->
            <div class="card h-100 newscard">
                <div class="row picrow">
                    <div class="col piccol image-container">
                        <img src="{{ asset('storage/'.$data->article_head_img) }}" class="card-img-top imgnewscard" alt="...">
                    </div>
                </div>
                <div class="card-body">
                <p class="mainnewstag">{{$data->author_name}}</p>
                <h5 class="card-title"><a class="card-hover" href="/trainArticle/details/{{$data->a_id}}"><strong>{{$data->article_title}}</strong></a></h5>
                <hr style="margin: 0px">
                <p>{!!   Str::limit($data->article_body, 250) !!}</p>
                <p class="card-text datenews">{{$data->created_at->format('Y-m-d')}}</p>
                </div>
                
                    
               
            </div>
            </div>
        @endforeach
        




      </div>

    </div>
    </div>
</body>

@endsection