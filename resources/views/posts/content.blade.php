<div class="content">
    <article class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Welcome to My Blog</h1>
                <p>This is the content of my blog post.</p>
            </div>
        </div>
    </article>
    {{-- show post --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="card p-3">
                        <div class="card-body">
                            <h2 class="text-center mb-3">{{ $post->title }}</h2>
                            <p class="text-center mb-3">{{ $post->content }}</p>
                            <img style="width: 100%; height: 100%;" src="{{ asset('images/' . $post->image) }}"
                                alt="{{ $post->title }}" class="img-fluid">

                            {{-- comment system add post --}}
                            <div class="comment-system">
                                <form action="{{ route('comments.store', $post->id) }}" method="POST">  
                                    @csrf
                                    <div class="form-group">
                                        <label for="comment">Comment</label>
                                    <input type="text" name="content" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success mt-3">Submit</button>
                                </form>
                                {{-- show comment --}}
                                <div class="comment-list">
                                    <h3>Comments</h3>
                                    <ul>
                                        @foreach ($post->comments as $comment)
                                            <li>{{ $comment->comment }}</li>
                                        @endforeach
                                    </ul>
                                </div>


                            </div>





                            <a class="btn btn-primary mt-3" href="">Read More</a>



                        </div>
                        <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>


</div>
