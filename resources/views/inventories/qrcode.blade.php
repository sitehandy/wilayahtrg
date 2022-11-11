@extends('layouts.induk')

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">QR Code</h1>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">

                {!! QrCode::size(250)->generate('ItSolutionStuff.com'); !!}

            </div>
        </div>


    </div>
</div>

@endsection
