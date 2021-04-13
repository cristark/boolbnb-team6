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

        $data = [
            'apartments' => $apartments
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
        $idUser = Auth::id();

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

        $main_img = Storage::put('main_images', $data['image']);
        $data['main_img'] = $main_img;
        $newApartment->main_img = $data['main_img'];

        $newApartment->fill($data);

        $newApartment->save();

        if (array_key_exists('services', $data)) {
            $newApartment->services()->sync($data['services']);
        }

        return redirect()->route('apartment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
