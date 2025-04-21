<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid vh-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
           <div class="col col-6">
              <div class="card shadow-lg">
                 <div class="card-body">
                    <h1 class="mb-5">Edit Post</h1>
     
                    <form action="{{ route('posts.update', $post->id) }}" method="POST">
                       @csrf
                       @method('PUT')
     
                       <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                       </div>
     
                       <div class="mb-3">
                          <label for="body" class="form-label">Body</label>
                          <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
                       </div>
     
                       <button type="submit" class="btn btn-dark w-100 mb-2">Update Post</button>
                       <a href="{{route('posts.index')}}" class="btn btn-outline-dark w-100">Cancel</a>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>