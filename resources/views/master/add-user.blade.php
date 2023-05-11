@extends('layouts.mainlayout')

@section('title', 'Add User')

@section('content')

    <h1>Tambah User</h1>

    <div class="mt-4">
        <form action="add-user" method="post">
            @csrf
            <div class="mt-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" style="width: 30%" placeholder="Username">
            </div>
            <div class="mt-2">
                <label for="name" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" style="width: 30%" placeholder="Password">
            </div>
            <div class="mt-2">
                <label for="name" class="form-label">Nama Pengguna</label>
                <input type="text" name="name" id="name" class="form-control" style="width: 30%" placeholder="Nama Pengguna">
            </div>
            <div class="mt-2">
                <label for="phone" class="form-label">No. Telp</label>
                <input type="text" name="phone" id="phone" class="form-control" style="width: 30%" placeholder="No. Telp">
            </div>
            <div class="mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" style="width: 30%" placeholder="Email Pengguna">
            </div>
            <div class="mt-3">
                <button class="btn btn-success" type="submit">Add User</button>
                <a href="user" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-danger mt-2">
        {{ session('message') }}
    </div>
    @endif

@endsection