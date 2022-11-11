
<div class="card">
    <div class="card-body">

        <div class="form-group">
            <label>ZONE</label>
            <input type="text" name="zone" value="{{ $tracking->zone ?? old('zone') }}" class="form-control">
        </div>

        <div class="form-group">
            <label>JENIS ITEM</label>
            <input type="text" name="jenis_item" value="{{ $tracking->jenis_item ?? old('jenis_item') }}" class="form-control">
        </div>

        <div class="form-group">
            <label>JUMLAH ITEM</label>
            <input type="number" name="jumlah_item" value="{{ $tracking->jumlah_item ?? old('jumlah_item') }}" class="form-control">
        </div>

        <div class="form-group">
            <label>ITEM SELESAI</label>
            <input type="number" name="item_selesai" value="{{ $tracking->item_selesai ?? old('jumlah_item') }}" class="form-control">
        </div>

        <div class="form-group">
            <label>NODE</label>
            <input type="text" name="node" value="{{ $tracking->node ?? old('node') }}" class="form-control">
        </div>

        <div class="form-group">
            <label>NOTA</label>
            <textarea name="nota" class="form-control">{{ $tracking->nota ?? old('nota') }}</textarea>
        </div>

        <div class="form-group">
            <label>STATUS</label>
            <select name="status" class="form-control">
                @if (isset($tracking))

                <option value="In Progress" {{ $tracking->status == 'In Progress' ? 'selected' : null }}>In Progress</option>
                <option value="Completed" {{ $tracking->status == 'Completed' ? 'selected' : null }}>Completed</option>
                <option value="Delayed" {{ $tracking->status == 'Delayed' ? 'selected' : null }}>Delayed</option>

                @else

                <option value="">--Sila Pilih Status--</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
                <option value="Delayed">Delayed</option>

                @endif
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</div>
