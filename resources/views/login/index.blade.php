@extends("layouts.main")

@section("container")
  <div class="row justify-content-center">
    <div class="col-md-5">
      @if (session()->has("success"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session("success") }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has("loginError"))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session("loginError") }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <main class="form-login">
        <h1 class="h3 mb-3 fw-normal">Please log in</h1>

        <form action="/login" method="post">
          @csrf

          <div class="form-floating">
            <input type="email" value="{{ old("email") }}" name="email" class="form-control @error ("email") is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
            <label for="email">Email</label>
            @error ("email")
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control @error ("email") is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error ("password")
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
        </form>

        <small class="justify-content-center d-flex mt-3">Not signed up? <a href="/signup" class="text-decoration-none ms-1">Sign up now</a></small>
      </main>
    </div>
  </div>
@endsection