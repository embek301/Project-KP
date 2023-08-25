@extends('layout/kpi-layout')

@section('space-work')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red;">{{ $error }}</p>
        @endforeach
    @endif

    <h2 class="mb-4">Input Karyawan</h2>
    <form action="{{ route('createUser') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-2">
                <label for="">Masukkan NIK</label>
            </div>
            <div class="col-md-4">
                <input type="text" name="nik" placeholder="NIK">
                <br><br>
            </div>
            <div class="col-md-2">
                <label for="">Masukkan Username</label>
            </div>
            <div class="col-md-4">
                <input type="text" name="username" placeholder="Username">
                <br><br>
            </div>
            <div class="col-md-2">
                <label for="">Masukkan nama</label>
            </div>
            <div class="col-md-4">
                <input type="text" name="name" placeholder="Nama">
                <br><br>
            </div>
            <div class="col-md-2">
                <label for="">Masukkan Email</label>
            </div>
            <div class="col-md-4">
                <input type="email" name="email" placeholder="Enter Email">
                <br><br>
            </div>
            <div class="col-md-2">
                <label for="">Masukkan Password</label>
            </div>
            <div class="col-md-4">
                <input type="password" name="password" placeholder="Enter Password">
                <br><br>
            </div>
            <div class="col-md-2">
                <label for="">Masukkan ulang Password</label>
            </div>

            <div class="col-md-4">
                <input type="password" name="password_confirmation" placeholder="Enter Confirm Password">
                <br><br>
            </div>
            <div class="col-md-2">
                <label for="">cabang</label>
            </div>
            <div class="col-md-4">
                <select name="cab" required class="form-control" style="border: 1px solid;">
                    <option value="">Pilih Cabang</option>
                    @foreach ($cabang as $cab)
                        <option value="{{ $cab->id }}">{{ $cab->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <label for="">Pilih Hak</label>
            </div>
            <div class="col-md-4">
                <select name="role_id" required class="form-control" style="border: 1px solid;">
                    <option value="">Pilih Hak</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->id }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-3">

        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <input type="submit" value="Create Employee" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
