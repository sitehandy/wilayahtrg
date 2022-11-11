@extends('layouts.induk')

@section('page-content')

<div class="row">
    <div class="col-md-12">

        <form method="POST" action="{{ route('cpe.store') }}" enctype="multipart/form-data">

        <div class="card">
            <div class="card-header">
                Tambah Maklumat CPE Replacement
            </div>
            <div class="card-body">

                @csrf
                @include('cpe.borang')

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>


    </div>
</div>

@endsection
