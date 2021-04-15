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


    public function contatto(){
            return view('guest.message.create');
    }


    public function sendMessage(Request $request)
    {   
        //a data passo tutto
        $data = $request->all();
        $newMessage = new Message();

        $apartment_id = Apartment::id();
        $newMessage->apartment_id = $apartment_id;

        $newMessage->fill($data);
        dd($newMessage);
        $newMessage->save();
        
        return redirect()->route('validation')->with('status', 'ok');
    }


    public function messaggioInviato(){
        return view('guest.message.inviato');
    }
}
