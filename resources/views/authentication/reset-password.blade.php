@extends('authentication.induk-authentication')

@section('page-content')


<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
</div>
<form class="user" method="POST" action="{{ route('password.update') }}">
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
        <input type="password" name="password_confirmation" class="form-control form-control-user"
            id="exampleInputPassword" placeholder="Password Confirmation">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="remember_me">Remember
                Me</label>
        </div>
    </div>

    <input type="hidden" name="token" value="{{ $token }}">
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Update Password
    </button>

</form>
<hr>
<div class="text-center">
    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
</div>
<div class="text-center">
    <a class="small" href="register.html">Create an Account!</a>
</div>



@endsection
