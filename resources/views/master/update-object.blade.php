@extends('layouts.mainlayout')

@section('title', 'Edit Objek')

@section('content')

    <h1>Edit Objek</h1>

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
        <form action="/update-object/{{$object->slug}}" method="post">
            @csrf
            @method('put')
            <div class="mt-2">
                <label for="objects_name" class="form-label">Nama Objek</label>
                <input type="text" name="objects_name" id="objects_name" class="form-control" style="width: 30%" value="{{$object->objects_name}}">
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Update</button>
                <a href="/objek" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>

@endsection