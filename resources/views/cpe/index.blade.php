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
                ajax: '{!! route('cpe.datatables') !!}',
                columns: [
                    { data: 'zone', name: 'zone' },
                    { data: 'serial_number', name: 'serial_number' },
                    { data: 'tarikh', name: 'tarikh' },
                    { data: 'customer', name: 'customer' },
                    { data: 'remarks', name: 'remarks' }
                ]
            });
        });
    </script>
@endsection

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Senarai CPE</h1>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">

                <table class="table table-bordered table-striped" id="table-datatables">
                    <thead class="thead-dark">
                        <th>ZONE</th>
                        <th>SERIAL NUMBER</th>
                        <th>TARIKH</th>
                        <th>CUSTOMER</th>
                        <th>REMARKS</th>
                    </thead>
                </table>


            </div>
        </div>


    </div>
</div>

@endsection
