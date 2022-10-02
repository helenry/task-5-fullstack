@extends("layouts.main")

@section("container")
  <p>{{ $name; }}</p>
  <p>{{  $email; }}</p>
  <img src="img/{{  $image; }}" class="img-thumbnail rounded-circle" width="200" alt="{{ $name; }}">
@endsection