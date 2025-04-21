<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid vh-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col col-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1 class="mb-5">Create Post</h1>
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf
                            <input name="title" placeholder="Title" class="form-control mb-3">
                            <textarea name="body" placeholder="Body" class="form-control mb-3"></textarea>
    
                            <button type="submit" class="btn btn-primary w-100 mb-2">Create Post</button>
                            <a href="{{route('posts.index')}}" class="btn btn-outline-primary w-100">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>