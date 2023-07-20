<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::latest()->get();

        return view('admin.pets.pet', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pets.createPet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'type'      => 'required',
            'birth'      => ['required', 'date'],
            'price'      => 'required',
        ]);

        if($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSave = $request->name.'_'.$request->type.'_'.time().'.'.$extension;
            $request->photo->move(public_path('img/pets'), $filenameSave);
        } else {
            $filenameSave = 'default.jpg'; 
        }

        $pet = new Pet();
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->birth = $request->birth;
        $pet->price = $request->price;
        $pet->desc = $request->desc;
        $pet->photo = $filenameSave;
        $pet->save();

        return redirect(route('admin.pet.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        $pet = Pet::find($pet->id);
        return view('admin.pets.profilePet', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        $pet = Pet::find($pet->id);
        
        return view('admin.pets.editPet', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $pet = Pet::find($pet->id);
        $this->validate($request, [
            'name'      => 'required',
            'type'      => 'required',
            'birth'      => ['required', 'date'],
            'price'      => 'required',
        ]);

        if($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSave = $request->name.'_'.$request->type.'_'.time().'.'.$extension;
            $request->photo->move(public_path('img/pets'), $filenameSave);
            $pet->photo = $filenameSave;
        } else {
        
        }

        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->birth = $request->birth;
        $pet->price = $request->price;
        $pet->desc = $request->desc;
        $pet->update();

        return redirect(route('admin.pet.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet = Pet::find($pet->id);
        unlink(public_path('img/pets/').$pet->photo);
        $pet->delete();

        return redirect(route('admin.pet.index'));
    }
}
