
<div class="card">
    <div class="card-body">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" value="{{ $user->name ?? old('name') }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email ?? old('email') }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</div>
