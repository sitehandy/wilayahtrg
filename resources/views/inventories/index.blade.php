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
                ajax: '{!! route('inventories.datatables') !!}',
                columns: [
                    { data: 'type', name: 'type' },
                    { data: 'brand', name: 'brand' },
                    { data: 'serial_number', name: 'serial_number' },
                    { data: 'tarikh_dapat', name: 'tarikh_dapat' },
                    { data: 'tarikh_installation', name: 'tarikh_installation' },
                    { data: 'remarks', name: 'remarks' },
                    { data: 'qrcode', name: 'qrcode', searchable: false, orderable: false }
                ]
            });
        });
    </script>
@endsection

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Senarai Users</h1>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">

                <table class="table table-bordered table-striped" id="table-datatables">
                    <thead class="thead-dark">
                        <th>TYPE</th>
                        <th>BRAND</th>
                        <th>SERIAL NUMBER</th>
                        <th>TARIKH DAPAT</th>
                        <th>TARIKH INSTALLATION</th>
                        <th>REMARKS</th>
                        <th>QRCODE</th>
                    </thead>
                </table>


            </div>
        </div>


    </div>
</div>

@endsection
