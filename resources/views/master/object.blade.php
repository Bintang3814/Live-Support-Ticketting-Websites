@extends('layouts.mainlayout')

@section('title', 'Data Object')

@section('content')
    <h1>Data Objek</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="deleted-objek" class="btn btn-secondary me-3">Data Terhapus</a>
        <a href="add-objek" class="btn btn-primary">Tambah Objek</a>
    </div>

    <div class="mt-3">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Objek</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($object as $item)
                    <tr class="align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->objects_name }}</td>
                        <td>
                            <a href="update-object/{{$item->slug}}">Edit</a>
                            <a href="delete-object/{{$item->slug}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection