@extends('adminLayout.adminapp')

@section('content')
<h1 class="d-flex justify-content-center align-items-center" style="color:gray;">RailLink</h1>
<br>
<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">

  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="padding: 30px; border-radius:30px;">
          <!-- Card content goes here -->
          <div class="card-body ">
            <h3 class="card-title text-center">Admin Login</h3>
            <br>
            <br>
            
            <form method="POST" action="/adminloginfunc">
            @csrf
              <div class="mb-3">
                <label for="exampleInputname" class="form-label">Admin email</label>
                <input type="text" class="form-control" id="exampleInputname" name="email">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
              
              <br>
              <button type="submit" class="btn btn-primary" style="border-radius: 30px;padding-left:15px;padding-right:15px;">Login</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Bootstrap JS (optional) -->


</body>

@endsection