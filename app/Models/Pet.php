<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'birth',
        'price',
        'desc',
        'photo'
    ];

    public function getTotalPet() {
        return Pet::all()->count();
    }
    
    public function getTotalAnjing() {
        return Pet::where('name', '=', 'Anjing')->count();
    }
    
    public function getTotalKucing() {
        return Pet::where('name', '=', 'Kucing')->count();
    }
    
    public function getTotalKelinci() {
        return Pet::where('name', '=', 'Kelinci')->count();
    }
}
