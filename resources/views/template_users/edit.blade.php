@extends('layouts.induk')

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit User</h1>

<div class="row">
    <div class="col-md-12">

        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @method('PATCH')
            @csrf

            @include('template_users.borang')


        </form>

    </div>
</div>

@endsection
