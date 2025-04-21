<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid vh-100">
      <div class="row h-100 d-flex justify-content-center align-items-center">
          <div class="col col-4">
              <div class="card shadow">
                  <div class="card-body">
                      <h1 class="mb-3">Login</h1>
                       <form method="POST" action="/login">
                          @csrf
                          <input class="form-control mb-3" name="email" type="email" placeholder="Email" value="{{old('email')}}" required>
                          <input class="form-control mb-3" name="password" type="password" placeholder="Password" required>
                          <button class="w-100 btn btn-primary mb-3" type="submit">Login</button>
                          <p class="text-center">Dont have an account? <a href="/register">Register</a></p>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>