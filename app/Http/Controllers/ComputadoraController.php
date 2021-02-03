<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{

    public function show(){
        $computadoras = Computadora::all();
        return view('dashboard', ['computadoras' => $computadoras] );
    }

    public function edit($id){
        $computadora = Computadora::find($id);
        return view('computadoras.edit', ['computadora' => $computadora]);
    }
    /**
     * Store a new computadora in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $computadora = new Computadora;

        $computadora->cpu = $request->cpu;
        $computadora->ubicacion = $request->ubicacion;
        $computadora->area = $request->area;
        $computadora->mother = $request->mother;
        $computadora->ram = $request->ram;
        $computadora->vga = $request->vga;
        $computadora->hdd = $request->hdd;
        $computadora->ssd = $request->ssd;
        $computadora->monitor = $request->monitor;
        $computadora->propietario = $request->propietario;
        $computadora->snGabinete = $request->snGabinete;
        $computadora->snMonitor = $request->snMonitor;
        $computadora->inventarioGabinete = $request->inventarioGabinete;
        $computadora->inventarioMonitor = $request->inventarioMonitor;

        $computadora->save();
        return redirect()->route('dashboard');
    }

    /**
     * Update an existing computadora in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $computadora = Computadora::find($request->id);
        $computadora->cpu = $request->cpu;
        $computadora->ubicacion = $request->ubicacion;
        $computadora->area = $request->area;
        $computadora->mother = $request->mother;
        $computadora->ram = $request->ram;
        $computadora->vga = $request->vga;
        $computadora->hdd = $request->hdd;
        $computadora->ssd = $request->ssd;
        $computadora->monitor = $request->monitor;
        $computadora->propietario = $request->propietario;
        $computadora->snGabinete = $request->snGabinete;
        $computadora->snMonitor = $request->snMonitor;
        $computadora->inventarioGabinete = $request->inventarioGabinete;
        $computadora->inventarioMonitor = $request->inventarioMonitor;

        $computadora->save();
        return redirect()->route('dashboard');
    }
}
