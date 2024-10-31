<!-- Content Section with Dark Theme -->
<div class="content py-5 bg-dark text-light">
    <article class="container text-center mb-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1 class="display-4 mb-4 text-primary">Welcome to My Blog</h1>
                <p class="lead text-muted">Explore our latest posts and insights.</p>
            </div>
        </div>
    </article>

    {{-- Show posts --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="card mb-5 shadow-lg bg-secondary text-light">
                        <img style="width: 100%; height: auto; border-radius: 5px 5px 0 0;"
                             src="{{ asset('images/' . $post->image) }}"
                             alt="{{ $post->title }}" class="card-img-top img-fluid">

                        <div class="card-body">
                            <h2 class="text-center text-info mb-3">{{ $post->title }}</h2>
                            <p class="text-muted text-center">{{ $post->content }}</p>

                            {{-- Comment system --}}
                            <div class="comment-system">
                                <form action="{{ route('comments.store', $post->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="comment" class="form-label text-light">Leave a Comment</label>
                                        <textarea name="content" class="form-control bg-dark text-light" rows="3"
                                                  placeholder="Write your comment here..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info mt-3">Submit</button>
                                </form>

                                {{-- Show comments for this post --}}
                                <div class="mt-4">
                                    <h5 class="text-light">Comments:</h5>
                                    @foreach ($contents as $content)
                                        @if ($content->post_id === $post->id)
                                            <div class="border-bottom border-secondary mb-3 pb-2">
                                                <p class="mb-1 text-light">{{ $content->content }}</p>
                                                <small class="text-muted">By {{ $content->user->name }}</small>

                                                @if(Auth::check() && (Auth::id() === $content->user_id || Auth::user()->role === 'admin'))
                                                    <form action="{{ route('comments.delete', $content->id) }}" method="POST" class="d-inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger ml-2">Delete</button>
                                                    </form>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <a class="btn btn-primary mt-3" href="#">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Optional CSS for Enhanced Styling -->
<style>
    body {
        background-color: #121212;
        color: #ffffff;
    }

    .bg-dark {
        background-color: #121212 !important;
    }

    .bg-secondary {
        background-color: #1f1f2e !important;
    }

    .text-light {
        color: #d1d1d6 !important;
    }

    .text-muted {
        color: #999999 !important;
    }

    .card {
        border-radius: 5px;
    }

    .card-body {
        background-color: #1f1f2e;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
    }

    .btn-info:hover {
        background-color: #138496;
    }

    .form-control {
        background-color: #2a2a35;
        color: #d1d1d6;
    }

    .comment-system .form-control:focus {
        box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.5);
    }

    /* Styling for the card images */
    .card-img-top {
        border-radius: 5px 5px 0 0;
    }
</style>
