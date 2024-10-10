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
                                {{-- show comment and show user name --}}
                                @foreach ($contents as $content)
                                    <div class=" d-flex justify-content-between align-items-center ">
                                        <p class="mb-0  ">{{ $content->content }}</p>
                                        <p class="text-muted mb-0 ">{{ $content->user->name }}</p>
                                    </div>
                                @endforeach


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
