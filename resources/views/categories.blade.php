@extends("layouts.main")

@section("container")
  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4">
          <a class="text-decoration-none text-white" href="/articles?category={{ $category->slug }}">
            <div class="card bg-dark text-white">
              <img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img" alt="...">
              <div class="card-img-overlay d-flex align-items-center">
                <h3 class="text-center flex-fill fs-2">
                  {{ $category->name }}
                </h3>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection