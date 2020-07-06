<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Reservation;

class StaticPagesController extends Controller
{
    public function home() {
        return view('home');
    }
    
    public function about() {
        return view('pages/about');
    }
    
    public function reservations() {
        return view('pages/reservations');
    }
    
    public function saveReservation(Request $request) {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required'],
            'phone_number' => ['required'],
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
        
        return redirect('/thank-you');
    }
    
    public function contact() {
        return view('pages/contact');
    }
    
    public function giftcards() {
        return view('pages/giftcards');
    }
    
    public function offers() {
        return view('pages/offers');
    }
    
    public function registerMember(Request $request) {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required']
        ]);
        
        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();
        
        return redirect('/thank-you');
    }
    
    public function thankYouPage() {
        return view('pages/thank-you');
    }
    
    public function menu() {
        return view('menu/index');
    }
    
    public function singlemenu() {
        return view('menu/single-menu');
    }
}
