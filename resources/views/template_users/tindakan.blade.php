<a href="{{ route('users.update', $user->id) }}" class="btn btn-info">
    Edit
</a>

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $user->id }}">
    Delete
</button>

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
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

                    <p>Nama: {{ $user->name }}</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>

        </form>
    </div>
</div>
