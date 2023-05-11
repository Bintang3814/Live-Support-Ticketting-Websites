@extends('layouts.mainlayout')

@section('title', 'Data User')

@section('content')
    <h1>Data User</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="add-user" class="btn btn-primary">Tambah User</a>
    </div>

    <div class="my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $key => $data)
                    <tr class="align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->rname }}</td>
                        <td>
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection