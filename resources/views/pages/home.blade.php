@extends('layout.app')
@section('css-link')
<link rel="stylesheet" href="/asset/css/homecss/home.css">
@endsection
@section('home')
    

<br>
<div class=" container vstack  start-div  " style="background-image: url('{{ asset('storage/main_img/home_start_div.jpg') }}');">
        
  <div class="container p-2 text-center">
      <h1 style="font-size: 50px; color: white;" data-bs-target="target-btn"><strong>Find & Explore Sri Lanka Railway</strong></h1>
      <br>
      <div class="text-center">
        <p class="text-center" style=" color: white;">Sri Lanka has a well-developed railway system operated by Sri Lanka Railways.<br> The network connects major cities and tourist destinations.</p>
      </div>
      <br>
      <a type="button" class="btn btn-outline-light btn-lg" style="border-radius: 30px; width: 130px;" href="#target-btn" data-bs-target="#target-btn"><strong>explore</strong></a>
  </div>

</div>

<br>
<br>
<br>

<div id="target-btn" class="s1-background">
  <div class="container">
    <div class="row text-center">
      <a class="text-decoration-none" href="/trainNews"><h1  style="color: black;font-size: 40px; margin-bottom: 50px; font-weight: 700px;"><strong>Latest News</strong></h1></a>
    </div>
    <div class="row">
      <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach ($view_data as $item)
        <div class="col">
            <div class="card newscard">
              <div class="row picrow">
                  <div class="col piccol image-container">
                  <img src="{{ asset('storage/'.$item->head_img) }}" class="card-img-top imgnewscard" alt="...">
                  </div>
              </div>
              <div class="card-body">
                
                <a href="/trainNews/details/{{ $item->n_id }}" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" style="color: black;font-size:18px"><strong>{{ $item->news_head }}</strong></a>            
                <p class="card-text datenews">{{$item->created_at->format('Y-m-d')}}</p>
              </div>
            </div>
          </div>
        @endforeach
        <!-- card1 -->

  

      </div>
    </div>
  </div>
</div>    

<br>
<br>

<!--Train details-->

<div class="container">
  <div class="row main-s2 row-cols-1 row-cols-md-2 g-4">
      <div class="col s2-left p-8 d-flex justify-content-center align-items-center">
          <div class="row gy-4">
              <h1 class="s2-main-title" style="margin-bottom: 24px;">It's all about Train!</h1>
              
              <p  style="padding-right: 20px; margin-top: 10px;margin-bottom: 20px;">Welcome to RailLink our website! We are dedicated to all things related to trains and railroads. Whether you are a passenger or a train enthusiast who has just started your journey to the fascinating world of trains, this website is the perfect place for you.</p>
              <a type="button" class="btn btn-info  s2-left-btn" href="/trainDetails"><strong>Learn</strong></a>
          </div>
          <div class="row">

          </div>
      </div>
      
      <div class="col s2-right ">
          <div class="row row-cols-1 row-cols-md-2 g-3">
            @foreach ($view_data02 as $item)
            <div class="col">
              <div class="card s2-traincard">     
                  <img src="{{ asset('storage/'.$item->train_img) }}" class="img-fluid card-img-top imageaboutcard s2-traincard-img" alt="...">
                  <div class="card-body">
                      <p id="s2-traincard-trainno" style="margin: 0;color: gray;font-size: 12px;">Train No:{{$item->train_no}}</p>
                      <h5 class="card-title"><a href="/trainDetails/details/{{$item->train_id}}" style="color: black;"><strong>{{$item->train_name}}</strong></a></h5>
                      <hr style="margin: 0; margin-bottom: 2px;">
                      <p class="card-text">{!!   Str::limit($item->train_dis, 112) !!}</p>
                  </div>
                  <div class="row buttonrow"></div>
              </div>
          </div>
            @endforeach


          </div>
      </div>
  </div>
</div>
<!--Train details-end-->
<br>
<br>
<!-- read articles-->

<div class="s3-main d-flex justify-content-center align-items-center">
  <div class="container  d-flex justify-content-center align-items-center">
      <div class="row">
          <div class="row">
              <div class="col text-center">
                  <h1 class="s3-main-title">Read Articles</h1>
              </div>
          </div>
          
          <div class="row s3-card row-cols-1 row-cols-lg-3 g-4 d-flex justify-content-center align-items-center">


              @foreach ($view_data01 as $data)
                <div class="card mb-3 s3-hrcard d-flex justify-content-center align-items-start" >
                <div class="row g-4 align-item-start">
                  <div class="col-4 image-container s3-card-img ">
                    <img src="{{ asset('storage/'.$data->article_head_img) }}" class="img-fluid s3-card-img-img object-fit-cove " alt="...">
                  </div>
                  <div class="col-8">
                    <div class="card-body ">
                      <h5 class="card-title "><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover s3-card-title" href="/trainArticle/details/{{$data->a_id}}"><strong>{{$data->article_title}}</strong></a></h5>
                      <p class="card-text"><small class="text-body-secondary">{{$data->created_at->format('Y-m-d')}}</small></p>
                    </div>
                  </div>
                </div>
                </div>
              @endforeach
              
          
          </div>

          <div class="row s3-para">
              <p class="text-center">
                Interseted about trains ! Your in the right place.<br> Read a wide variety of train articles from our website including history of railroads and new technology of railroads Its all about trains and technology 
              </p>
          </div>
          <div class="row s3-btnrow d-flex justify-content-center align-items-center">
              <a type="button" class="btn btn-info s3-btn " href="/trainArticle"><strong>Learn</strong></a>
          </div>
      </div>
  </div>
</div>

<!-- read articles-end-->
<br>
<br>
<br>
<!--WHo we are-->
<div class=" container vstack  about-div  " style="background-image: url('{{ asset('storage/main_img/nsbm.jpg') }}');">
  <h1 style="font-size: 50px; color: white; font-weight: 550;">Who we Are?</h1>
  <br>
  <div class="text-center">
    <p class="text-center" style=" color: white;">
      NSBM Green University, the nation’s premier degree-awarding institute, is the first of its kind in South Asia. It is a government-owned self-financed institute that operates under the purview of the Ministry of Education. As a leading educational centre in the country,<br> NSBM has evolved into becoming a highly responsible higher education institute that offers unique opportunities and holistic education on par with international standards while promoting sustainable living...
    </p>
  </div>
  <br>
  <a type="button" href="/aboutUs" class="btn btn-outline-light btn-lg" style="border-radius: 30px; width: 150px;"><strong>find more</strong></a>

</div>
<!--WHo we are-end-->
<br>
<br>
<br>


@endsection