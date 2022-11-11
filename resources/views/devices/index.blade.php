@extends('layouts.induk')

@section('css_custom')
    <link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('js_custom')
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    <script>
        $(function() {
            $('#table-datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('devices.datatables') !!}',
                columns: [
                    { data: 'name', name: 'name' },
                ]
            });
        });
    </script>
@endsection

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Senarai Devices</h1>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">

                <table class="table table-bordered table-striped" id="table-datatables">
                    <thead class="thead-dark">
                        <th>NAME</th>
                    </thead>
                </table>


            </div>
        </div>


    </div>
</div>

@endsection
