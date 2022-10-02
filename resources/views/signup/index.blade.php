@extends("layouts.main")

@section("container")
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-signup">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <form action="/signup" method="post">
          @csrf

          <div class="form-floating">
            <input required value="{{ old("name") }}" type="text" name="name" class="form-control rounded-top @error ("name") is-invalid @enderror" id="name" placeholder="Name">
            <label for="name">Name</label>
            @error ("name")
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input required value="{{ old("username") }}" type="text" name="username" class="form-control @error ("username") is-invalid @enderror" id="username" placeholder="Username">
            <label for="username">Username</label>
            @error ("username")
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input required value="{{ old("email") }}" type="email" name="email" class="form-control @error ("email") is-invalid @enderror" id="email" placeholder="Email">
            <label for="email">Email</label>
            @error ("email")
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input required type="password" name="password" class="form-control rounded-bottom @error ("password") is-invalid @enderror" id="password" placeholder="Password">
            <label for="password">Password</label>
            @error ("password")
              <div class="invalid-feedback mb-2">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign up</button>
        </form>

        <small class="justify-content-center d-flex mt-3">Already signed up? <a href="/login" class="text-decoration-none ms-1">Log in now</a></small>
      </main>
    </div>
  </div>
@endsection