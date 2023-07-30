@extends('adminLayout.adminapp')

@section('nav-bar')
    @include('adminLayout.adminnav')
@endsection

@section('content')
    <br>
    <h1>Create Article</h1>
    <br>
    <hr>

    <form name="create-article-form" method="post" action="{{url('admin/trainarticle')}}" enctype="multipart/form-data">

        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Head Image</label>
                <input name="article_head_img" type="file" class="form-control" id="exampleInputEmail1">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Admin ID</label>
              <input name="ad_num" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Author Name</label>
                <input name="author_name" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Author Email</label>
                <input name="author_email" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Article title</label>
                <input name="article_title" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="news-area" class="form-label">Article Discription</label>
                <textarea name="article_body" type="text" class="form-control" id="news-area"></textarea>
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