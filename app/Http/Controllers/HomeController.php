<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Message;
use App\Sponsor;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $apartment = Apartment::all();
        $pivot_sponsor_apartment = DB::table('apartment_sponsor')->latest('end_date')->get();

        $data = [
            'pivot' => $pivot_sponsor_apartment
        ];
        // dd($prova);
        // $sponsor_apartment = DB::table('apartment_sponsor')->where('apartment_id', $apartment->id)->latest('end_date')->first();
        // dd($apartment);
        return view('guest.home', $data);
    }


    public function contatto($slug){

        // $apartment_id = Apartment::all();
        $apartment_id = Apartment::where('id', $slug)->firstOrFail();
        $data = [
            'apartment_id' => $apartment_id
        ];
        return view('guest.message.create', $data);
    }


    public function sendMessage(Request $request)
    {   
        $data = $request->all();
        $newMessage = new Message();
        $newMessage->apartment_id = $data['apartment_id'];
        $newMessage->fill($data);
        $newMessage->save();
        
        return redirect()->route('guest.message.inviato')->with('status', 'ok');
    }


    public function messaggioInviato(){
        return view('guest.message.inviato');
    }
}
