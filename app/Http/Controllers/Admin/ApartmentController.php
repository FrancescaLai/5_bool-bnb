<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ApartmentController extends Controller
{

    protected $validation = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'num_room' => 'required|integer',
        'num_bath' => 'required|integer',
        'num_bed' => 'required|integer',
        'mq' => 'required|integer',
        'price_day' => 'required|numeric',
        'country' => 'required|string|max:255',
        'region' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'street' => 'required|string|max:255',
        'zip_code' => 'required|string|max:255',
        'floor' => 'required|integer',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric'
    ];

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();

        return view('admin.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this->validation;
        // validation
        $request->validate($validation);

        $data = $request->all();

        // controllo checkbox
        $data['visibility'] = !isset($data['visibility']) ? 0 : 1;
        // imposto lo slug partendo dal title
        $data['slug'] = Str::slug($data['name'], '-');
        // imposto lo user_id
        $data['user_id'] = Auth::id();
        // upload file image
        if (isset($data['image']) ) {
            $data['image'] = Storage::disk('public')->put('images', $data['image']);
        }

        // insert
        $newApartment = Apartment::create($data);

        // aggiungo i service
        if(isset($data['services'])){
            $newApartment->services()->attach($data['services']);
        }

        // redirect
        return redirect()->route('admin.index')->with('message', 'L\'appartamento è stato correttamente inserito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        // Controllo se l'utente è autorizzato alla visualizzazione del singolo appartamento
        $user_id = Auth::id();
        
        if( $apartment->user_id != $user_id ) {
            abort('403');
        }

        return view('admin.apartment', compact('apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        $user_id = Auth::id();
        
        if( $apartment->user_id != $user_id ) {
            abort('403');
        }

        $services = Service::all();

        return view('admin.edit', compact('apartment', 'services'));
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
        // Controllo se l'utente è autorizzato alla modifica
        $user_id = Auth::id();

        if( $apartment->user_id != $user_id ) {
            abort('403');
        }

        $validation = $this->validation;
        // validation
        $request->validate($validation);

        $data = $request->all();

        // controllo checkbox
        $data['visibility'] = !isset($data['visibility']) ? 0 : 1;
        // imposto lo slug partendo dal title
        $data['slug'] = Str::slug($data['name'], '-');
        // upload file image
        if ( isset($data['image']) ) {
            $data['image'] = Storage::disk('public')->put('images', $data['image']);
        }

        // update
        $apartment->update($data);

        // aggiorno i service
        if(!isset($data['services'])){
            $data['services'] = [];
        }

        $apartment->services()->sync($data['services']);

        return redirect()->route('admin.show', $apartment)->with('message', 'L\'appartamento ' . $apartment->name . ' è stato modificato!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        // Controllo se l'utente è autorizzato alla cancellazione
        $user_id = Auth::id();

        if( $apartment->user_id != $user_id ) {
            abort('403');
        }

        $apartment->delete();

        return redirect()->route('admin.index')->with('message', 'L\'appartamento è stato eliminato!');
    }
}
