@extends('adminLayout.adminapp')

@section('nav-bar')
    @include('adminLayout.adminnav')
@endsection

@section('content')
    <br>
    <br>
    <h1>Train news</h1>
    <br>
    
    <a class="btn btn-success" href="/admin/trainnews/create">Create News</a>
    <hr>

    @if (count($news_data)>0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">N_ID</th>
                <th scope="col">auther</th>
                <th scope="col">admin id</th>
                <th scope="col">news head</th>
                <th scope="col">created at</th>
                <th scope="col">Update at</th>
                <th scope="col">con.</th>
            </tr>
            </thead>
            <tbody>
                
                @foreach ($news_data as $data)
                <tr>
                    <th scope="row">{{$data->n_id}}</th>
                    <td>{{$data->author_name}}</td>
                    <td>{{$data->ad_num}}</td>
                    <td>{{$data->news_head}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    <td>
                        
                        <div class="row">
                            <div class="col">
                                <a type="button" class="btn btn-outline-primary" href="/admin/trainnews/{{$data->n_id}}/edit">update</a>
                            </div>
                            <div class="col">
                                <form method="POST" action="/admin/trainnews/{{$data->n_id}}">
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
    
    <div class="mt-6 p-4">{{ $news_data->links() }}</div>

@endsection