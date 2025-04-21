<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <div class="container-fluid vh-100">
    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="col col-4">
            <div class="card shadow">
                <div class="card-body">
                    @auth
                     <h1>Welcome, {{ auth()->user()->name }}!</h1>
                        <p>You are logged in as {{ auth()->user()->email }}</p>
                    
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-primary w-100">Logout</button>
                    @endauth
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>