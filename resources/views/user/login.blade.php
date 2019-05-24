@extends('layouts.main')

@section('content')
    <header class="navbar bg-dark border-dark">
        <h5 class="title text-light mt-2">Login</h5>
        <div class="navbar-nav-scroll">
            <ul class="navbar-nav flex-row">
                <li>
                    <a href="{{ route('user.create') }}" class="nav-link text-light">
                        New Account
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <div class="container-fluid mt-5">
        <div class="mx-auto col-md-3 col-sm-4 col-lg-3 mt-5">
            <div class="card border-dark">
                <div class="card-header border-dark">
                    Login
                </div>
                <div class="card-body">
                  <form class="form" action="{{ route('login') }}" method="POST">
					  @csrf
                      <div class="form-group">
                          <input class = "form-control mt-2" type="text" name="username" value="" placeholder="Username">
                      </div>
                      <div class="form-group">
                          <input class = "form-control mt-4" type="password" name="password" value="" placeholder="Password">
                      </div>
                      <button class = "btn btn-dark btn-block" type="submit" name="button">Login</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection
