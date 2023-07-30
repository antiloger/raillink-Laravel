<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/admindashboard"><strong> Raillink Admin Panel</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          



        </ul>
        <div class="row">
          @auth
          <div class="col">
            <a href="">{{auth()->user()->name}}</a>
          </div>
          @endauth

          <div class="col">
            <a class="btn btn-outline-success" type="button" href="/adminregister">Register</a>
        
          </div>
          <div class="col">
            <form method="POST" action="/adminlogout">
              @csrf
              <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>