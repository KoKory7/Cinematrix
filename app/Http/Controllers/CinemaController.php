<?php

namespace App\Http\Controllers;
use App\Models\MovieFeature;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use App\Models\Booking;
use App\Models\CinemaFeature;

use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function home(){
        
        $movie = MovieFeature::find(1);
        return view('home', [
            "movie" => $movie
        ]);
    }

    public function signUp(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->role = 'customer';
        $user->save();

        return view('registered', [
            "name" => $user->name
        ]);
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('booking')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login no valido');
    }

    public function bookSeat(Request $request){
        // consultar la película
        $movie = MovieFeature::find(1);
        // consultar usuario con la sesión activa
        $user = Auth::user();
        // consultar el id de la silla
        $seat = $request->seat;

        // consultar si el usuaio ya reservo la misma silla
        $booking_exist = Booking::where('user_id', $user->id)
        ->where('cinema_seat_id', $seat)
        ->where('movie_feature_id', $movie->id)
        ->first();

        // consultar si otros usuarios ya reservaron la silla
        $booking_exist_2 = Booking::where('cinema_seat_id', $seat)
        ->where('movie_feature_id', $movie->id)
        ->first();

        
        if($booking_exist) {
            return redirect()->back()->with('warning', 'Ya reservaste esta silla');   
        }

        if($booking_exist_2) {
            return redirect()->back()->with('warning', 'Esta silla ha sido reservada por otro usuario');   
        }
        
        //crear la reserva
        $booking = new Booking;
        $booking->user_id = $user->id;
        $booking->cinema_seat_id = $seat;
        $booking->movie_feature_id = $movie->id;
        $booking->save();

        return view('reserved',[
            "name"  => $user->name,
            "seat" => $seat
        ]);
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function booking(){
        $bookings = Booking::all()->toArray();
        return view('booking', [
            "bookings" => $bookings
        ]);
    }
}


