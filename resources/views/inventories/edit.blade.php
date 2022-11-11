@extends('layouts.induk')

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Inventori</h1>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">

            <form method="POST" action="{{ route('inventories.update', $inventory->id) }}">

                @csrf
                @method('PATCH')
                @include('inventories.borang')

            </form>

            </div>
        </div>


    </div>
</div>

@endsection
