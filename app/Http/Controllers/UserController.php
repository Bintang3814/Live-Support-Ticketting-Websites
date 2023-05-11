<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {   
        $goingCount = Ticket::where('status_id', 1)->count();
        $reviewCount = Ticket::where('status_id', 2)->count();
        $completedCount = Ticket::where('status_id', 3)->count();
        $pendingCount = Ticket::where('status_id', 4)->count();
        $ticketCount = Ticket::count();
        return view('home', [
            'ticket_count' => $ticketCount,
            'going_count' => $goingCount,
            'review_count' => $reviewCount,
            'completed_count' => $completedCount,
            'pending_count' => $pendingCount, 
        ]);
    }
}
