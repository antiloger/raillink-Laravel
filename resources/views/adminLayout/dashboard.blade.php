@extends('adminLayout.adminapp')

@section('nav-bar')
    @include('adminLayout.adminnav')
@endsection

@section('content')
<br>
<br>
<div class="container">
    <div class="row" style="min-width:100px;">
        <div class="col-4">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Train Pages
                  <span class="badge bg-primary rounded-pill">{{$countdetails}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  News Pages
                  <span class="badge bg-primary rounded-pill">{{$countnews}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Article Pages
                  <span class="badge bg-primary rounded-pill">{{$countarticle}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Admin Users
                    <span class="badge bg-primary rounded-pill">{{$countadmin}}</</span>
                  </li>
              </ul>
        </div>
        <div class="col-8">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Add Trains</h5>
                      </div>
                      <div class="card-body">
                        
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a type="button" class="btn btn-outline-secondary btn-sm" href="admin/traindetails">Add</a>
                      </div>
    
                    </div>
                </div>
                
                <div class="col">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Add News</h5>
                      </div>
                      <div class="card-body">
                        
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a type="button" class="btn btn-outline-secondary btn-sm" href="admin/trainnews">Add</a>
                      </div>
    
                    </div>
                </div>
    
                <div class="col">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Add Articles</h5>
                      </div>
                      <div class="card-body">
                        
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a type="button" class="btn btn-outline-secondary btn-sm" href="admin/trainarticle" >Add</a>
                      </div>
    
                    </div>
                </div>
    
                <div class="col">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Admin Register</h5>
                      </div>
                      <div class="card-body">
                        
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a type="button" class="btn btn-outline-secondary btn-sm" href="/adminregister">Register</a>
                      </div>
    
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>
@endsection