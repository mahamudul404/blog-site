{{-- this is admin dashboard admin can create post and delete and update post --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <h1>Admin Dashboard</h1>
  <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
  <a href="{{ route('posts.index') }}" class="btn btn-secondary">View Posts</a>
  {{-- view and manange update and delete post --}}

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Manage Posts</h2>
        <table class="table table-striped table-bordered">
          <thead class="text-center">
            <tr>
              <th>Title</th>
              <th>Content</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr class="text-center">
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td><img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid" style="width: 100px; height: 100px;"></td>
                <td class="d-flex justify-content-center align-items-center gap-2">
                  <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                  <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>



</body>
</html>
