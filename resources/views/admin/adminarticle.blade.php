@extends('adminLayout.adminapp')

@section('nav-bar')
    @include('adminLayout.adminnav')
@endsection

@section('content')
    <br>
    <br>
    <h1>Train Article</h1>
    <br>
    
    <a class="btn btn-success" href="/admin/trainarticle/create">Create Article</a>
    <hr>

    @if (count($article_data)>0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">A_ID</th>
                <th scope="col">auther</th>
                <th scope="col">admin id</th>
                <th scope="col">Article title</th>
                <th scope="col">created at</th>
                <th scope="col">Update at</th>
                <th scope="col">con.</th>
            </tr>
            </thead>
            <tbody>
                
                @foreach ($article_data as $data)
                <tr>
                    <th scope="row">{{$data->a_id}}</th>
                    <td>{{$data->author_name}}</td>
                    <td>{{$data->ad_num}}</td>
                    <td>{{$data->article_title}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    <td>
                        
                        <div class="row">
                            <div class="col">
                                <a type="button" class="btn btn-outline-primary" href="/admin/trainarticle/{{$data->a_id}}/edit">update</a>
                            </div>
                            <div class="col">
                                <form method="POST" action="/admin/trainarticle/{{$data->a_id}}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-outline-danger">delete</button>
                                </form>
                            </div>
                        </div>
                        
                    </td>
                </tr>
                @endforeach
            
            </tbody>
      </table>
      
    @else
        <p>No data include!</p>
    @endif
    
    <div class="mt-6 p-4">{{ $article_data->links() }}</div>

@endsection