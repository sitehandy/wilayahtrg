

<div class="form-group">
    <label>ZONE</label>
    <select name="zone" class="form-control">
        @if (isset($cpe))

        <option value="JH" {{ $cpe->zone == 'JH' ? 'selected' : null }}>JH</option>
        <option value="KTRG" {{ $cpe->zone == 'KTRG' ? 'selected' : null }}>KTRG</option>
        <option value="DN/CKI" {{ $cpe->zone == 'DN/CKI' ? 'selected' : null }}>DN/CKI</option>

        @else

        <option value="JH">JH</option>
        <option value="KTRG">KTRG</option>
        <option value="DN/CKI">DN/CKI</option>

        @endif
    </select>
</div>

<div class="form-group">
    <label>SERIAL NUMBER</label>
    <input type="text" name="serial_number" value="{{ $cpe->serial_number ?? old('serial_number') }}" class="form-control">
</div>

<div class="form-group">
    <label>TARIKH</label>
    <input type="date" name="tarikh" value="{{ $cpe->tarikh ?? old('tarikh') }}" class="form-control">
</div>

<div class="form-group">
    <label>CUSTOMER</label>
    <input type="text" name="customer" value="{{ $cpe->customer ?? old('customer') }}" class="form-control">
</div>

<div class="form-group">
    <label>GAMBAR</label>
    <input type="file" name="gambar" class="form-control">
</div>

<div class="form-group">
    <label>REMARKS</label>
    <textarea name="remarks" class="form-control">{{ $cpe->remarks ?? old('remarks') }}</textarea>
</div>

