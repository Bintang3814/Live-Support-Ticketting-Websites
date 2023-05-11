@extends('layouts.mainlayout')

@section('title', 'Deleted Object')

@section('content')
    <h1>Deleted Object</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="objek" class="btn btn-danger">Kembali</a>
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
                            <a href="restore-objek/{{$item->slug}}">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection