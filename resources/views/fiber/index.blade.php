@extends('layouts.induk')

@section('page-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Fiber Info</h1>

<div class="card">
    <div class="card-body">


            <a href="{{ route('export.data') }}" class="btn btn-primary">Export</a>



        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#import-node">
            Import Node
          </button>

  <!-- Modal -->
  <div class="modal fade" id="import-node" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('import.node') }}" method="POST" enctype="multipart/form-data">
            @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Import Node</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Sila pilih dalam format xlsx atau csv.</p>

            <div class="form-group">
                <input type="file" name="file">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Import</button>
        </div>
      </div>
    </form>
    </div>
  </div>



        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>TM NODE</th>
                    <th>CABLE ID</th>
                    <th>CORE</th>
                    <th>EPEID</th>
                    <th>CCTNO</th>
                    <th>LV/LD No</th>
                    <th>Customer</th>
                    <th>Remarks</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($cores as $item)

                <tr>
                    <td>{{ $item->node->tmnode }}</td>
                    <td>{{ $item->cableid }}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->epeid }}</td>
                    <td>{{ $item->customer->cctno }}</td>
                    <td>{{ $item->customer->reduncygroup }}</td>
                    <td>{{ $item->customer->customer }}</td>
                    <td></td>
                </tr>

                @empty
                <tr>
                    <td colspan="7">Tiada Rekod</td>
                </tr>
                @endforelse
            </tbody>

        </table>

        {!! $cores->links() !!}

    </div>
</div>



@endsection

