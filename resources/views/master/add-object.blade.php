@extends('layouts.mainlayout')

@section('title', 'Tambah Objek')

@section('content')

    <h1>Tambah Objek</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mt-4">
        <form action="add-objek" method="post">
            @csrf
            <div class="mt-2">
                <label for="objects_name" class="form-label">Nama Objek</label>
                <input type="text" name="objects_name" id="objects_name" class="form-control" style="width: 30%" placeholder="Isi Nama Object">
            </div>
            <div class="mt-3">
                <button class="btn btn-success" type="submit">Add New Object</button>
                <a href="objek" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>

@endsection