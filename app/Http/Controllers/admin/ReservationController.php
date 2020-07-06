<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $reservations = Reservation::paginate(10);
        return view('admin/reservations/index', [
            'reservations' => $reservations
        ]);
    }
    
    public function create() {
        return view('admin/reservations/create');
    }
    
    public function store(Request $request) {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guest_total' => ['required', 'integer'],
            'time' => ['required'],
        ]);
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_total = request('guest_total');
        $reservation->time = request('time');
        $reservation->save();
        
        return redirect('/admin/reservations');
    }
    
    public function edit($id) {
        $reservation = Reservation::find($id);
        return view('admin/reservations/edit', [
            'reservation' => $reservation
        ]);
    }
    
    public function update(Request $request, $id) {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guest_total' => ['required', 'integer'],
            'time' => ['required'],
        ]);
        
        $reservation = Reservation::find($id);
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_total = request('guest_total');
        $reservation->time = request('time');
        $reservation->save();
        
        return redirect('admin/reservations');
    }
    
    public function delete($id) {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('admin/reservations');
    }
}
