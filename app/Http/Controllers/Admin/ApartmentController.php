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
        $newApartment->slug = Str::slug($data['title']);        
        $path = Storage::put('main_images', $data['main_img']);
        $data['main_img'] = $path;
        $newApartment->main_img = $data['main_img'];        
        $newApartment->fill($data);

        $newApartment->save();
        
        if (array_key_exists('services', $data)) {
            $newApartment->services()->sync($data['services']);
        }

        return redirect()->route('apartment.index')->with("status",'L\'appartamento è stato creato con successo');
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
        $apartment->slug = Str::slug($data['title']);
        
        // immagini
        if(array_key_exists('main_img', $data))
        {
            // cancella foto presistente immagine
            Storage::delete('main_images', $apartment->main_img);
           
            // salvataggio immagine
            $path = Storage::put('main_images', $data['main_img']);
            
            // percorso file
            $data['main_img'] = $path;
            $apartment->main_img = $data['main_img'];

        }

        if(array_key_exists('images', $data))
        {
            // prendo id del appartamento
            $num = $apartment->id;
            // cerca immagini associati
            $images_prev = Image::where('apartment_id', $num)->get();
            // patch della alleria
            $path =  "image_gallery/";
            
            // cancellazione tutte le immagini dal server
            foreach ($images_prev as $image) {
                $name_img = str_replace( $path, "",$image->src);
                $name_img = str_replace( "[]", "",$image->src);
                Storage::delete('main_images', $name_img);
            }

            $apartment->images()->delete();
            
            // salvataggio immagini
            foreach ($data['images'] as $image) {
                $path = Storage::put('image_gallery', $image);
            
                // salva immagine sul database
                $image = new Image();
                $image->src = $path.$image;
                $image->img_description = 'Non disponibile descrizione della foto';
                
                // crea nuova relazione
                $apartment->images()->saveMany([$image]);
            }
            

            // dd($data['images']);
            
        }

        //validation 
 
        //need riderect into update
        $apartment->update($data);

        
        //PER TAB PONTE CON SERVICES
        if(array_key_exists('services', $data)){
            $apartment->services()->sync($data['services']);
        }
        //                          nome rotta a scelta
        return redirect()->route('apartment.index', $apartment)->with("status",'L\'appartamento è stato aggiornato con successo');
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
        $apartment->views()->delete();
        $apartment->images()->delete();

        $apartment->delete();
        return redirect()->route('apartment.index')->with("status",'L\'appartamento è stato cancellato con successo');
    }
}