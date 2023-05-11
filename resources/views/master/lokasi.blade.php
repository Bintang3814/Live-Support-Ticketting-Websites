@extends('layouts.mainlayout')

@section('title', 'Create Tickets')

@section('content')
    <h1>Data Lokasi</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="add-lokasi" class="btn btn-primary">Tambah Lokasi</a>
    </div>

    <div class="my-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Ruangan</th>
                    <th>Nama Ruangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lokasi as $item)
                    <tr class="align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->room_code }}</td>
                        <td>{{ $item->room_name }}</td>
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