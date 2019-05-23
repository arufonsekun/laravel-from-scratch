@extends('layouts.main')

@section('content')
<header class="navbar bg-dark border-dark">
    <h5 class="title text-light mt-2">Sign In</h5>
</header>

<div class="container-fluid mt-5">
    <div class="mx-auto col-md-3 col-sm-4 col-lg-4 col-xl-3 mt-4">
        <div class="card border-dark">
            <div class="card-header border-dark">
                Sign In Form
            </div>
                <div class="card-body">
                    <form class="form" action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class = "form-control" type="text" name="name" value="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input class = "form-control" type="text" name="email" value="" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input class = "form-control" type="text" name="username" value="" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input class = "form-control" type="password" name="password" value="" placeholder="Password">
                        </div>
                        <button class = "btn btn-success" type="submit">Create Account</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
