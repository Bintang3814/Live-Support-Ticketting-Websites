@extends('layouts.mainlayout')

@section('title', 'Tickets')

@section('content')
    <h1>Tickets List</h1>

    @if (Auth::user()->role_id != 3)
        <div class="mt-3 d-flex justify-content-end">
            <a href="tickets-add" class="btn btn-primary">Create Tickets</a>
        </div>
    @endif

    <div class="my-4">
        {{-- {{$tickets}} --}}
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Title</th>
                    <th>Lokasi</th>
                    <th>Objek</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($tickets as $key => $data)
                    <tr class="align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->room_name }}</td>
                        <td>{{ $data->objects_name }}</td>
                        <td>
                            <a href="" class="btn btn-warning">{{ $data->sname}}</a>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection