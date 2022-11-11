@extends('layouts.induk')

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-sm">
              <a href="{{ route('cpe.create') }}" class="btn btn-primary btn-block">CPE REPLACEMENT</a>
            </div>
            <div class="col-sm">
                <a href="{{ route('site.create') }}" class="btn btn-danger btn-block">SITE SURVEY</a>
            </div>
            <div class="col-sm">
                <a href="{{ route('inventories.create') }}" class="btn btn-success btn-block">INVENTORY</a>
            </div>
        </div>

    </div>
</div>

@endsection

