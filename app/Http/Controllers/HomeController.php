<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Message;

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
        return view('guest.home');
    }


    public function contatto($apartment_selected){

        // $apartment_id = Apartment::all();
        // $apartment_id = Apartment::where('id', $apartment)->firstOrFail();
        // dd($apartment_selected);
        $data = [
            'apartment_id' => $apartment_selected
        ];
        dd($data);

        return view('guest.message.create', $data);
    }


    public function sendMessage(Request $request,Apartment $apartment)
    {   
        //a data passo tutto
        $data = $request->all();
        $newMessage = new Message();

        // $apartment_id = Apartment::all();
        // $apartment_id = Apartment::where('id', $apartment)->firstOrFail();
        // $newMessage->apartment_id = $apartment_id;
        // $newMessage->apartment_id = 1;

        $newMessage->fill($data);
        dd($newMessage);
        $newMessage->save();
        
        return redirect()->route('guest.message.inviato')->with('status', 'ok');
    }


    public function messaggioInviato(){
        return view('guest.message.inviato');
    }
}
