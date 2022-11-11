@extends('authentication.induk-authentication')

@section('page-content')


<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
</div>
<form class="user" method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group">
        <input type="email" name="email" class="form-control form-control-user"
            id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Email Address...">
    </div>

    <button type="submit" class="btn btn-primary btn-user btn-block">
        Send Password Reset Link
    </button>

</form>
<hr>
<div class="text-center">
    <a class="small" href="{{ route('login') }}">Login?</a>
</div>
<div class="text-center">
    <a class="small" href="register.html">Create an Account!</a>
</div>



@endsection
