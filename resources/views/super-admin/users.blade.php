@extends('layout/kpi-layout')

@section('space-work')
    <h2 class="mb-4">Users</h2>

    <table class="table table-bordered table-hover mb-0 datatable" id="employeeTable">
        <tr>
            <th>id</th>
            <th>no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Cabang</th>
            <th>Action</th>
        </tr>
        {{-- @foreach ($users as $index => $user)
            <tr>
                <td align="center">{{ $index + 1 }}</td>
                <td><a href="{{ route('manageRole', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->roles == null)
                        User
                    @else
                        {{ $user->roles->name }}
                    @endif
                </td>
            </tr>
        @endforeach --}}
        @push('scripts')
        <script type="module">
            $(document).ready(function() {
                $("#employeeTable").DataTable({
                    serverSide: true,
                    processing: true,
                    ajax: "/getUsers",
                    columns: [{
                            data: "id",
                            name: "id",
                            visible: false
                        },
                        {
                            data: "DT_RowIndex",
                            name: "DT_RowIndex",
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: "name",
                            name: "name"
                        },
                        {
                            data: "email",
                            name: "email"
                        },
                        {
                            data: "roles.name",
                            name: "roles.name"
                        },
                        {
                            data: "cabangs.name",
                            name: "cabangs.name"
                        },
                        {
                            data: "action",
                            name: "action",
                            orderable: false,
                            searchable: false
                        },
                    ],
                    order: [
                        [0, "desc"]
                    ],
                    lengthMenu: [
                        [10, 25, 50, 100, -1],
                        [10, 25, 50, 100, "All"],
                    ],
                });
            });
        </script>
    @endpush
    </table>

@endsection
