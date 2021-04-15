<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $newMessage->fill($data);
        $newMessage->save();
        
        return redirect()->route('validation')->with('Il messaggio é stato inviato GRAZIE');
    }


    public function messaggioInviato(){
        return view('PAGINA MESSAGGIO VALIDATO');
    }
}
