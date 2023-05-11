<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Objects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DataMasterController extends Controller
{
    public function index()
    {
        return view('datamaster');
    }

    public function user()
    {
        $user = User::join('roles', 'roles.id', '=', 'users.role_id')
                    ->get(['users.username', 'users.name', 'users.phone', 'users.email', 'roles.rname', ]);
        return view('master.user', ['user' => $user]);
    }

    public function adduser()
    {
        return view('master.add-user');
    }

    public function storeuser(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'email' => 'max:255',
            'name' => 'max:100',
        ]);

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Successfull create an account!!');
        return redirect('user');
    }
    
    public function objek()
    {
        $object = Objects::all();
        return view('master.object', [
            'object' => $object,
        ]);
    }

    public function addobjek()
    {
        return view('master.add-object');
    }

    public function storeobjek(Request $request)
    {
        $validated = $request->validate([
            'objects_name' => 'required|unique:objects|max:255',
        ]);

        $object = Objects::create($request->all());

        return redirect('objek')->with('status', 'Data berhasil ditambahkan!');;
    }
    
    public function editobjek($slug)
    {
        $object = Objects::where('slug', $slug)->first();
        return view('master.update-object', [
            'object' => $object
        ]);
    }

    public function updateobjek(Request $request, $slug)
    {
        $validated = $request->validate([
            'objects_name' => 'required|unique:objects|max:255',
        ]);

        $object = Objects::where('slug', $slug)->first();
        $object->slug = null;
        $object->update($request->all());

        return redirect('objek')->with('status', 'Data berhasil diubah!');;
    }

    public function deleteobjek($slug)
    {
        $object = Objects::where('slug', $slug)->first();
        return view('master.delete-object', [
            'object' => $object
        ]);
        // $object->delete();

        // return redirect('objek')->with('status', 'Data berhasil dihapus!');;
    }

    public function removeobjek($slug)
    {
        $object = Objects::where('slug', $slug)->first();
        $object->delete();

        return redirect('objek')->with('status', 'Data berhasil dihapus!');;
    }

    public function deletedobjek()
    {
        $object = Objects::onlyTrashed()->get();
        return view('master.deleted-object', [
            'object' => $object
        ]);
    }

    public function restoreobjek($slug)
    {
        $object = Objects::withTrashed()->where('slug', $slug)->first();
        $object->restore();

        return redirect('objek')->with('status', 'Data berhasil dikembalikan!');;
    }

    public function lokasi()
    {
        $lokasi = DB::table('lokasi')->get();
        return view('master.lokasi', [
            'lokasi' => $lokasi,
        ]);
    }
    
    public function teknik()
    {
        return view('master.teknik');
    }
}
