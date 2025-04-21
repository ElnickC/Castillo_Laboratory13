<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid vh-100">
        <div class="row d-flex justify-content-center h-100">
           <div class="col col-10 ">
              <div class="card shadow">
                 <div class="card-body p-0">
                    <div class="mb-3">
                       <h1 class="text-center fs-2 pb-3 py-3">Blog App</h1>
                    </div>
     
                    <div class="d-flex justify-content-between px-2">
                       <p class="fs-5 fw-semibold">List of Posts</p>
     
                       <p><a class="btn btn-primary fs-5" href="{{ route('posts.create') }}"><i
                                class="bi bi-plus-circle-fill me-2"></i>Create Post</a></p>
                    </div>
     
     
                    @if ($posts->isEmpty())
                    <div class="text-center">
                       <strong>No posts available.</strong>
                    </div>
     
                    @else
                    @foreach ($posts as $post)
                    <div class="border border-2 border-start-0 border-end-0 mb-1">
                       <div class="row px-2 ">
                          <div class="col">
                             <p class="fs-5 fw-semibold">Title : <span>{{ $post->title }}</span> </p>
                          </div>
     
                          <div class="col d-flex justify-content-end gap-2 align-items-center">
                             <div><a class="btn btn-dark" href="{{ route('posts.show', $post) }}"><i
                                      class="bi bi-eye-fill me-2"></i>View Post</a></div>
     
                             <div><a class="btn btn-dark" href="{{ route('posts.edit', $post) }}"><i
                                      class="bi bi-pencil-square me-2"></i>Edit</a></div>
                             <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-dark"><i class="bi bi-trash-fill me-2"></i>Delete</button>
                             </form>
                          </div>
                       </div>
                    </div>
                    @endforeach
                    @endif
                 </div>
              </div>
           </div>
        </div>
     </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>