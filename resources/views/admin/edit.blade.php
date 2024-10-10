@include('posts.css')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Post</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
                </div>

                {{-- carrent image --}}
                <div class="form-group mt-3">
                    <label for="current_image">Current Image</label>
                    <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid" style="width: 100px; height: 100px;">
                </div>

                <div class="form-group mt-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>