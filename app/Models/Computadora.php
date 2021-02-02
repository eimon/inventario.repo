<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ubicacion',
        'area',
        'mother',
        'cpu',
        'ram',
        'vga',
        'hdd',
        'ssd',
        'monitor',
        'propietario',
        'snGabinete',
        'snMonitor',
        'inventarioGabinete',
        'inventarioMonitor',
    ];
}
