@extends('adminLayout.adminapp')

@section('nav-bar')
    @include('adminLayout.adminnav')
@endsection

@section('content')
    <br>
    <br>
    <h1>Train details</h1>
    <br>
    
    <a class="btn btn-success" href="/admin/traindetails/create">Create details</a>
    <hr>

    @if (count($train_data)>0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Train_ID</th>
                <th scope="col">Admin id</th>
                <th scope="col">Train_No</th>
                <th scope="col">Train title</th>
                <th scope="col">created at</th>
                <th scope="col">Update at</th>
                <th scope="col">con.</th>
            </tr>
            </thead>
            <tbody>
                
                @foreach ($train_data as $data)
                <tr>
                    <th scope="row">{{$data->train_id}}</th>
                    <td>{{$data->ad_num}}</td>
                    <td>{{$data->train_no}}</td>
                    <td>{{$data->train_name}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    <td>
                        
                        <div class="row">
                            <div class="col">
                                <a type="button" class="btn btn-outline-primary" href="/admin/traindetails/{{$data->train_id}}/edit">update</a>
                            </div>
                            <div class="col">
                                <form method="POST" action="/admin/traindetails/{{$data->train_id}}">
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
    
    <div class="mt-6 p-4">{{ $train_data->links() }}</div>

@endsection