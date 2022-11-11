@extends('authentication.induk-authentication')

@section('page-content')


<div class="text-center">
    <img src="{{ asset('themes/assets/images/tm-logo.png') }}" class="img-fluid mb-5" style="max-height: 40px">
    <h1 class="h4 text-gray-900 mb-4">{{ config('app.name') }}</h1>
</div>
<form class="user" method="POST" action="{{ route('login.semak') }}">
    @csrf
    <div class="form-group">
        <input type="email" name="email" class="form-control form-control-user"
            id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Email Address...">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control form-control-user"
            id="exampleInputPassword" placeholder="Password">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="remember_me">Remember
                Me</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Login
    </button>

</form>
<hr>
<div class="text-center">
    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
</div>



@endsection
