
<div class="form-group">
    <label>TYPE</label>
    <select name="type" class="form-control">
        @if (isset($inventory))

        <option value="">--Sila Pilih Type--</option>
        @foreach ($selectDevices as $device)
        <option value="{{ $device->name }}"{{ $inventory->type == $device->name ? ' selected' : null }}>{{ $device->name }}</option>
        @endforeach

        @else

        <option value="">--Sila Pilih Type--</option>
        @foreach ($selectDevices as $device)
        <option value="{{ $device->name }}">{{ $device->name }}</option>
        @endforeach

        @endif
    </select>
</div>

<div class="form-group">
    <label>BRAND</label>
    <select name="brand" class="form-control">
        @if (isset($inventory))

        <option value="">--Sila Pilih Brand--</option>
        @foreach ($selectBrands as $brand)
        <option value="{{ $brand->name }}"{{ $inventory->brand == $brand->name ? ' selected' : null }}>{{ $brand->name }}</option>
        @endforeach

        @else

        <option value="">--Sila Pilih Brand--</option>
        @foreach ($selectBrands as $brand)
        <option value="{{ $brand->name }}">{{ $brand->name }}</option>
        @endforeach

        @endif
    </select>
</div>

<div class="form-group">
    <label>SERIAL NUMBER</label>
    <input type="text" name="serial_number" value="{{ $inventory->serial_number ?? old('serial_number') }}" class="form-control">
</div>

<div class="form-group">
    <label>TARIKH DAPAT</label>
    <input type="date" name="tarikh_dapat" value="{{ $inventory->tarikh_dapat ?? old('tarikh_dapat') }}" class="form-control">
</div>

<div class="form-group">
    <label>TARIKH INSTALLATION</label>
    <input type="date" name="tarikh_installation" value="{{ $inventory->tarikh_installation ?? old('tarikh_installation') }}" class="form-control">
</div>

<div class="form-group">
    <label>REMARKS</label>
    <textarea name="remarks" class="form-control">{{ $inventory->remarks ?? old('remarks') }}</textarea>
</div>
