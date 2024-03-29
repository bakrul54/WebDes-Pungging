@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">

      @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissable fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif


        <main class="form-signin w-500 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" name="username" class="form-control" @error('username') is-invalid @enderror id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                <label for="username"></label>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password"></label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
          </main>        
    </div>
</div>

@endsection