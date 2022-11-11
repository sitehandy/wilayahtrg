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
                ajax: '{!! route('users.datatables') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'tindakan', name: 'tindakan' }
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
                        <th>ID</td>
                        <th>NAMA</td>
                        <th>EMAIL</th>
                        <th>TINDAKAN</th>
                    </thead>
                    {{-- <tbody>

                        @foreach ($senaraiUsers as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>


                            </td>
                        </tr>
                        @endforeach

                    </tbody> --}}
                </table>

                {{-- <p>{{ $senaraiUsers->count() }} rekod daripada keseluruhan {{ $senaraiUsers->total() }} rekod.</p>

                <hr>
                {!! $senaraiUsers->links() !!} --}}

            </div>
        </div>


    </div>
</div>

@endsection
