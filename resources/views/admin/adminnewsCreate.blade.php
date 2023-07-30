@extends('adminLayout.adminapp')

@section('nav-bar')
    @include('adminLayout.adminnav')
@endsection

@section('content')
    <br>
    <h1>Create News</h1>
    <br>
    <hr>

    <form name="create-news-form" method="post" action="{{url('admin/trainnews')}}" enctype="multipart/form-data">

        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Head Image</label>
                <input name="head_img" type="file" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Author Name</label>
              <input name="auth_name" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Admin ID</label>
              <input name="admin_id" type="text" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">News Head</label>
                <input name="news_head" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="news-area" class="form-label">News Discription</label>
                <textarea name="news_body" type="text" class="form-control" id="news-area"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#news-area' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    

@endsection