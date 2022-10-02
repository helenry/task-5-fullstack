@extends("layouts.main")

@section("container")
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2>{{ $article->title }}</h2>
        <p>By <a href="/articles?user{{ $article->user->username }}" class="text-decoration-none">{{ $article->user->name }}</a> in <a href="/articles?category={{ $article->category->slug }}" class="text-decoration-none">{{ $article->category->name }}</a></p>

        <img src="https://images.unsplash.com/photo-1470075801209-17f9ec0cada6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1587&q=80" class="img-fluid" width="800" alt="">

        <article class="my-3">
          {!! $article->content !!}
        </article>

        <a href="/articles" class="d-block mt-5 mb-4">Back to Articles</a>
      </div>
    </div>
  </div>
@endsection