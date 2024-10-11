<div class="content py-5 bg-light">
    <article class="container mb-5">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h1 class="display-4 mb-4">Welcome to My Blog</h1>
                <p class="lead">This is the content of my blog post.</p>
            </div>
        </div>
    </article>

    {{-- Show posts --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="card mb-5 shadow-lg">
                        <img style="width: 100%; height: auto;" src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="card-img-top img-fluid">

                        <div class="card-body">
                            <h2 class="text-center mb-3">{{ $post->title }}</h2>
                            <p class="text-muted text-center mb-4">{{ $post->content }}</p>

                            {{-- Comment system --}}
                            <div class="comment-system">
                                <form action="{{ route('comments.store', $post->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="comment" class="form-label">Leave a Comment</label>
                                        <textarea name="content" class="form-control" rows="3" placeholder="Write your comment here..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                                </form>

                                {{-- Show comments for this post --}}
                                <div class="mt-4">
                                    <h5 class="mb-3">Comments:</h5>
                                    @foreach ($contents as $content)
                                        @if ($content->post_id === $post->id)
                                            <div class="border-bottom mb-3 pb-2">
                                                <p class="mb-1">{{ $content->content }}</p>
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
