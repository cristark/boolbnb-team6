<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Apartment;
use App\Image;
use App\Message;
use App\Service;
use App\Sponsor;
use App\User;
use App\View;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::all();
        $sponsors = Sponsor::all();
        $services = Service::all();

        $data = [
            'apartments' => $apartments,
            'sponsors' => $sponsors,
            'services' => $services
        ];
        return view('admin.apartment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();

        $data = [
            'services' => $services
        ];

        return view('admin.apartment.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $idUser = Auth::id();
        $services = Service::all();

        $newApartment = new Apartment();
        
        $newApartment->user_id =$idUser;
        // $newApartment->title = $data['title'];
        // $newApartment->num_rooms = $data['num_rooms'];
        // $newApartment->num_beds = $data['num_beds'];
        // $newApartment->num_baths = $data['num_baths'];
        // $newApartment->mq = $data['mq'];
        // $newApartment->city = $data['city'];
        // $newApartment->province = $data['province'];
        // $newApartment->state = $data['state'];
        // $newApartment->latitude = $data['latitude'];
        // $newApartment->longitude = $data['longitude'];
        // $newApartment->description = $data['description'];
        // $newApartment->price = $data['price'];
        // $newApartment->active = $data['active'];

        $newApartment->slug = Str::slug($data['title']);

        // $main_img = Storage::put('main_images', $data['image']);
        // dd($main_img);
        // $data['main_img'] = $main_img;
        // $newApartment->main_img = $data['main_img'];
        
        $path = Storage::put('main_images', $data['main_img']);
        $data['main_img'] = $path;
        $newApartment->main_img = $data['main_img'];

        // if (isset($data['main_img'])) {
        //     $path = $request->file('main_img')->store('main_images', 'public');
        //     $newApartment->main_img = $path;
        // }
        
        $newApartment->fill($data);

        $newApartment->save();

        if (isset($data['services'])) {
            $newApartment->services()->sync($data['services']);
        }

        // if (array_key_exists('services', $data)) {
        //     $newApartment->services()->sync($data['services']);
        // }

        /**
         * if (array_key_exists('services', $data)) {
         *  dd($data['services']);
         *  $newApartment->services()->sync($data['services']);
         *  $newApartment->services()->sync($data['services']);
         *  $newApartment->services()->sync($data['services']);
         * }
         */

        return redirect()->route('apartment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $apartment = Apartment::where('slug', $slug)->firstOrFail();

        $data = [
            'apartment' => $apartment
        ];

        
        return view('admin.apartment.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $apartment = Apartment::where('slug', $slug)->firstOrFail();
        $services = Service::all();

        $data = [
            'apartment' => $apartment,
            'services' => $services
        ];

        return view('admin.apartment.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        $data = $request->all();
        //modifica immagine         "main_images"=cartella
        $path = Storage::put('main_images', $data['main_img']);
        $data['main_img'] = $path;
        $apartment->main_img = $data['main_img'];
        //validation 
        $request->validate([
            "title" => "required|max:150",
            "num_rooms" => "required",
            "num_beds" => "required",
            "num_baths" => "required",
            "mq" => "required",
            "city" => "required|max:150"
            // "province" => "required|max:150",
            // "state" => "required"
        ]);
        //need riderect into update
        $apartment->update($data);
        
        //PER TAB PONTE CON SERVICES
        if(array_key_exists('services', $data)){
            $apartment->services()->sync($data['services']);
        }
        //                          nome rotta a scelta
        return redirect()->route('apartment.index', $apartment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        //prendi il messaggio dove la fk apartment id é uguale all apartment ID
        // $messages = Message::where('apartment_id', $apartment->id)->get();

        // //ricordarsi di includere la parte dei messaggi

        // //delete service and sponsor tab ponte
        $apartment->services()->sync([]);
        $apartment->sponsors()->sync([]);

        $apartment->messages()->delete();
        // $apartment->user()->delete();
        $apartment->views()->delete();
        $apartment->images()->delete();

        $apartment->delete();
                //scegliere dove ritornare una volta cancellato
        return redirect()->route('apartment.index');
    }
}