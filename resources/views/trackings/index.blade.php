@extends('layouts.induk')

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Senarai Trackings</h1>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <th>#</td>
                        <th>ZONE</td>
                        <th>JENIS ITEM</th>
                        <th>JUMLAH ITEM</th>
                        <th>ITEM SELESAI</th>
                        <th>NODE</th>
                        <th>NOTA</th>
                        <th>STATUS</th>
                        <th>TINDAKAN</th>
                    </thead>
                    <tbody>

                        @foreach ($senaraiTrackings as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->zone }}</td>
                            <td>{{ $item->jenis_item }}</td>
                            <td>{{ $item->jumlah_item }}</td>
                            <td>{{ $item->item_selesai }}</td>
                            <td>{{ $item->node }}</td>
                            <td>{{ $item->nota }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="{{ route('trackings.edit', $item->id) }}" class="btn btn-info">
                                    Edit
                                </a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $item->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modal-delete-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="POST" action="{{ route('trackings.destroy', $item->id) }}">
                                            @method('DELETE')
                                            @csrf

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Pengesahan Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    Adakah anda bersetuju untuk delete data berikut?

                                                    <p>Nama: {{ $item->zone }}</p>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>


    </div>
</div>

@endsection
