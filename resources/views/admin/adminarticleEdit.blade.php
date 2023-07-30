@extends('adminLayout.adminapp')

@section('nav-bar')
    @include('adminLayout.adminnav')
@endsection

@section('content')
    <br>
    <h1>Create Article</h1>
    <br>
    <hr>

    <form name="create-article-form" method="post" action="{{url('admin/trainarticle', ['trainarticle' => $data->a_id])}}" enctype="multipart/form-data">

        @csrf
        {{method_field('PUT')}}
            <div class="mb-3" >
                <img src="{{ asset('storage/' . $data->article_head_img) }}" class="img-thumbnail" alt="..."style="height: 100px;">
                <!--<img src="" alt="" style="width: 100%;height:100%;">-->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Head Image</label>
                <input name="article_head_img" type="file" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Article title</label>
                <input name="article_title" type="text" class="form-control" id="exampleInputPassword1" value="{{$data->article_title}}">
            </div>
            <div class="mb-3">
                <label for="news-area" class="form-label">Article Discription</label>
                <textarea name="article_body" type="text" class="form-control" id="news-area">{{$data->article_body}}</textarea>
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