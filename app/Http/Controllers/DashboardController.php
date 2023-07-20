<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
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
