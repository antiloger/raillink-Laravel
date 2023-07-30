@extends('adminLayout.adminapp')

@section('nav-bar')
    @include('adminLayout.adminnav')
@endsection

@section('content')
    <br>
    <h1>Create Train Details</h1>
    <br>
    <hr>

    <form name="create-article-form" method="post" action="{{url('admin/traindetails', ['traindetails' => $data->train_id])}}" enctype="multipart/form-data">

        @csrf
        {{method_field('PUT')}}

        <div class="mb-3" >
            <img src="{{ asset('storage/' . $data->train_img) }}" class="img-thumbnail" alt="..."style="height: 100px;">
            <!--<img src="" alt="" style="width: 100%;height:100%;">-->
        </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Head Image</label>
                <input name="train_img"  type="file" class="form-control" id="exampleInputEmail1">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Admin ID</label>
              <input name="ad_num" value="{{$data->ad_num}}" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Train Name</label>
                <input name="train_name" value="{{$data->train_name}}" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Train_no</label>
                <input name="train_no" value="{{$data->train_no}}" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="train-area-txt-1" class="form-label train-area-txt">Train Discription</label>
                <textarea name="train_dis"  type="text" class="form-control" id="train-area-txt-1">{{$data->train_dis}}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Train Type</label>
                <input name="train_type" value="{{$data->train_type}}" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Train Type link</label>
                <input name="train_type_link" value="{{$data->train_type_link}}" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            *add article id here
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Train Operating days</label>
                <input name="train_opdays" value="{{$data->train_opdays}}" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Available Class</label>
                <input name="train_avclass" value="{{$data->train_avclass}}" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Number of Stops</label>
                <input name="train_stops_no" value="{{$data->train_stops_no}}" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Stops</label>
                <input name="train_stops" value="{{$data->train_stops}}" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Journey Duration</label>
                <input name="train_time" value="{{$data->train_time}}" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="train-area-txt-2" class="form-label train-area-txt">Facilites</label>
                <textarea name="train_facilites" type="text" class="form-control" id="train-area-txt-2">{{$data->train_facilites}}</textarea>
            </div>
            <div class="mb-3">
                <label for="train-area-txt-3" class="form-label train-area-txt">More</label>
                <textarea name="train_more" type="text" class="form-control" id="train-area-txt-3">{{$data->train_more}}</textarea>
            </div>
            
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>

    <br>
    <br>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#train-area-txt-1' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#train-area-txt-2' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#train-area-txt-3' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    

@endsection