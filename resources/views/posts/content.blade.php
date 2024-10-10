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
    <div class="row">
        <div class="col-md-8">
            @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                    <a href="" class="btn btn-primary">Read More</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
    </div>


</div>