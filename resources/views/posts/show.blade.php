<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid vh-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
           <div class="col col-6">
              <div class="card shadow-lg">
                 <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Back</a>
     
                    <h1 class="fs-3 mt-3 mb-3">Title: {{ $post->title }}</h1>
                    <p class="border p-3">{{ $post->body }}</p>
                  
                 </div>
              </div>
           </div>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>