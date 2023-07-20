<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
        $pet = new Pet();
        $pets = [
            'total'      => $pet->getTotalPet(),
            'anjing'     => $pet->getTotalAnjing(),
            'kucing'     => $pet->getTotalKucing(),
            'kelinci'     => $pet->getTotalKelinci(),
        ];
        
        return view('admin.dashboard', compact('pets'));
    }
}
