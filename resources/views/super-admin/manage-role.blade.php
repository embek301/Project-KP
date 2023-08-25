@extends('layout/kpi-layout')

@section('space-work')
    <h2 class="mb-4">Edit Karyawan</h2>

    <form action="{{ route('updateRole') }}" method="POST">
        @csrf
        <div class="row mt-3">
            <div class="col-md-2">
                <label for="nik">NIK</label>
            </div>
            <div class="col-md-4">
                <input type="text" id="nik" name="nik" value=" ">
                <br>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="name">Nama</label>
            </div>
            <div class="col-md-4">
                <input type="text" id="name" name="name" value="{{ $users->name }}">
                <br>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="email">Email</label>
            </div>
            <div class="col-md-4">
                <input type="text" id="email" name="email" value="{{$users->email}} ">
                <br>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="username">Username</label>
            </div>
            <div class="col-md-4">
                <input type="text" id="username" name="username" value="">
                <br>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="password">Password</label>
            </div>
            <div class="col-md-4">
                <input type="password" id="password" name="password" value="{{ $users->password }}">
                <br>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="penilai_ii">Penilai II</label>
            </div>
            <div class="col-md-4">
                <select name="penilai_ii" required class="form-control" style="border: 1px solid;">
                    <option value="">Select Penilai II</option>

                    <option value="0">User</option>
                </select>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="penilai_iii">Penilai III</label>
            </div>
            <div class="col-md-4">
                <select name="penilai_iii" required class="form-control" style="border: 1px solid;">
                    <option value="">Select Penilai III</option>

                    <option value="0">User</option>
                </select>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="penilai_iv">Penilai IV</label>
            </div>
            <div class="col-md-4">
                <select name="penilai_iv" required class="form-control" style="border: 1px solid;">
                    <option value="">Select Penilai IV</option>

                    <option value="0">User</option>
                </select>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="cabang">Cabang</label>
            </div>
            <div class="col-md-4">
                <select name="cabang" required class="form-control" style="border: 1px solid;">
                    @php
                        $selected = '';
                        if ($errors->any()) {
                            $selected = old('cabang');
                        } else {
                            $selected = $users->cabang_id;
                        }
                    @endphp
                    @foreach ($cabang as $cab)
                        <option value="{{ $cab->id }}" {{ $selected == $cab->id ? 'selected' : '' }}>
                            {{ $cab->id . ' - ' . $cab->name }}
                        </option>
                    @endforeach
                </select>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="tgl_masuk">Tanggal Masuk</label>
            </div>
            <div class="col-md-4">
                <input type="tgl_masuk" id="tgl_masuk" name="tgl_masuk">
                <br>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-2">
                <label for="">Select Hak</label>
            </div>
            <div class="col-md-4">
                <select name="role_id" required class="form-control" style="border: 1px solid;">
                    @php
                    $selected = '';
                    if ($errors->any()) {
                        $selected = old('roles');
                    } else {
                        $selected = $users->role_id;
                    }
                @endphp
                @foreach ($roles as $hak)
                    <option value="{{ $hak->id }}" {{ $selected == $hak->id ? 'selected' : '' }}>
                        {{$hak->name }}
                    </option>
                @endforeach
                </select>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-grid">
                <a href="{{ route('kpi') }}" class="btn btn-outline-danger btn-lg mt-3"><i
                        class="bi-arrow-left-circle me-2"></i>
                    Cancel</a>
            </div>
            <div class="col-md-6 d-grid">
                <button type="submit" class="btn btn-success btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                    Save</button>
            </div>
        </div>
        <script>
            $('tgl_masuk').datepicker()
        </script>
    </form>
@endsection
