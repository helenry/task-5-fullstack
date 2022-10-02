@extends("layouts.main")

@section("container")
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/articles">
        @if (request("category"))
          <input type="hidden" name="category" value="{{ request("category") }}">
        @endif
        @if (request("user"))
          <input type="hidden" name="user" value="{{ request("user") }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search articles" aria-label="Search articles" aria-describedby="button-addon2" name="search" value="{{ request("search") }}" autocomplete="off">
          <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($articles->count())
    <div class="card mb-3">
      <img src="https://images.unsplash.com/photo-1471180625745-944903837c22?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="/articles/{{ $articles[0]->slug }}" class="text-decoration-none text-dark"><h3 class="card-title">{{ $articles[0]->title }}</h3></a>
        <p>
          <small class="text-muted">
            By
            <a href="/articles?user={{ $articles[0]->user->username }}" class="text-decoration-none">
              {{ $articles[0]->user->name }}
            </a>
            in
            <a href="/articles?category={{ $articles[0]->category->slug }}" class="text-decoration-none">
              {{ $articles[0]->category->name }}
            </a>
            {{ $articles[0]->created_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text">{{ $articles[0]->excerpt }}</p>
        <a href="/articles/{{ $articles[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
      </div>
    </div>
  
    <div class="container">
      <div class="row">
        @foreach ($articles->skip(1) as $article)
          <div class="col-md-4 mb-4">
            <div class="card">
              <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.75)">
                <a href="/articles?category={{ $article->category->slug }}" class="text-decoration-none text-white">{{ $article->category->name }}</a>
              </div>
              <img src="https://images.unsplash.com/photo-1569511166187-97eb6e387e19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1510&q=80" class="card-img-top" alt="...">
              <div class="card-body">
                <h2>
                  <a href="/articles/{{ $article->slug }}" class="text-decoration-none">{{ $article->title }}</a>
                </h2>
                <p>By <a href="/articles?user={{ $article->user->username }}" class="text-decoration-none">{{ $article->user->name }}</a> {{ $article->created_at->diffForHumans() }}
                </small></p>

                <p>{{ $article->excerpt }}</p>

                <a href="/articles/{{ $articles[0]->slug }}" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @else
    <p class="text-center fs-4">No articles found</p>
  @endif

  <div class="d-flex justify-content-end">
    {{ $articles->links() }}
  </div>
@endsection