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
  
</body>
</html>
