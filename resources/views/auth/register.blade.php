@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="/auth/register" method="POST">
            {!! csrf_field() !!}
            <h1 class="form-signin-heading">Register</h1>
            <hr>
            <label for="name" class="sr-only">Username</label>
            <input type="name" id="name" name="name" class="form-control" placeholder="Username" required autofocus>
            <label for="email" class="sr-only">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <label for="password_confirmation" class="sr-only">Confirm password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
</div>
@stop