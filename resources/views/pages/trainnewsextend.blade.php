@extends('layout.app')

@section('css-link')
    <link rel="stylesheet" href="/asset/css/trainnews/extend.css">
@endsection

@section('content')
<div class="container web-head">
    <div class="row tag-row-head">
        <!--<div class="colsa">
            <span class="badge text-bg-secondary ">Tech</span>
            <span class="badge text-bg-secondary">world</span>
        </div>-->
        <br>
        
        <div class="row">
        <div class="col head-titel">
            <h1 style="font-size: 50px;"><strong>{{$newsdata->news_head}}</strong></h1>
            
            <p style="margin: 0px;">Author: {{$newsdata->author_name}}</p>
            <p style="margin: 0px;">Create at: {{$newsdata->created_at}}</p>

        </div>
    </div>

    </div>
  </div>
  <div class=" container vstack  start-div img-container" style="background-image: url('{{ asset('storage/'.$newsdata->head_img) }}')">
    
    
  </div>

  <br>
  
  <div class="container">
    <hr>
    <div class="row">
        <!--<div class="col meta-detail-left" >
            <div class="row">
                
            </div>
            <div class="row">
                <p><a>antilogerme@gmail.com</a></p>
            </div>
        </div>-->
        <div class="col  meta-detail-right">
            <div class="row text-end">
                <p>Updated at: {{$newsdata->updated_at}}</p>
            </div>
        </div>
    </div>
  </div>


  <!--pra-->

  <div class="container" style="padding-left: 50px; padding-right: 50px; margin-top: 20px;">
    <p >
        {!! $newsdata->news_dis !!}
    </p>
  </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
@endsection