<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid vh-100">
      <div class="row h-100 d-flex justify-content-center align-items-center">
          <div class="col col-4">
              <div class="card shadow">
                  <div class="card-body">
                      <h1 class="mb-3">Register</h1>
                       <form method="POST" action="/register">
                          @csrf
                          <input class="form-control mb-3" name="name" placeholder="Name" required>
                          <input class="form-control mb-3" name="email" type="email" placeholder="Email" required>
                          <input class="form-control mb-3" name="password" type="password" placeholder="Password" required>
                          <input class="form-control mb-3" name="password_confirmation" type="password" placeholder="Confirm Password" required>
                          <button class="btn btn-primary w-100" type="submit">Register</button>
                          @if ($errors->any ())
                           <ul class="px-4 py-2 bg-red-100">
                            @foreach ($errors->all() as $error)
                                <li class="my-2 text-red-500">{{$error}}</li>
                            @endforeach
                           </ul>
                          @endif
                          <p class="text-center mt-2">Already have an account? <a href="/login">Login</a></p>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>