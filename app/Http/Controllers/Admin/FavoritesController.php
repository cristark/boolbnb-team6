<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Apartment;

class FavoritesController extends Controller
{
    public function index(){

        // trova utente id autenticato
        $user = User::where('id', Auth::id())->firstOrFail();
        $apartments = $user->favorites;
        
        $data = [
            'apartments' => $apartments,
            'user' => $user
        ];

        return view('admin.apartment.favorites', $data);
    }

    public function create($slug){

        // trova utente id autenticato
        $apartment = Apartment::where('slug', $slug)->firstOrFail();
        $user = User::where('id', Auth::id())->firstOrFail();

        // cerca preferiti
        $apartment = $user->favorites()->attach($apartment->id);

        // dd($apartment);
        $data = [
            'apartments' => $user->favorites,
            'user' => $user
        ];

        return redirect('admin/favorites');
    }


   
}
