<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = Ticket::join('users', 'users.id', '=', 'tickets.user_id')
                        ->join('lokasi', 'lokasi.id', '=', 'tickets.lokasi_id')
                        ->join('objects', 'objects.id', '=', 'tickets.objects_id')
                        ->join('status', 'status.id', '=', 'tickets.status_id')
                        ->get(['tickets.user_id', 'users.name', 'tickets.title', 'lokasi.room_name', 'objects.objects_name', "status.sname", "tickets.status_id"]);
        return view('tickets', [
            'tickets' => $tickets
        ]);
    }

    public function add()
    {
        $user = User::get('name');
        return view('create-tickets', [
            'user' => $user
        ]);
    }
}
