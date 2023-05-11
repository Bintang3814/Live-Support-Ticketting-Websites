@extends('layouts.mainlayout')

@section('title', 'Hapus Objek')

@section('content')
    <h2>Apakah anda yakin ingin menghapus objek {{$object->objects_name}}?</h2>
    <div class="mt-3">
        <a href="/remove-object/{{$object->slug}}" class="btn btn-danger me-3">Ya, saya yakin</a>
        <a href="/objek" class="btn btn-primary">Batalkan</a>
    </div>
@endsection