<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlanetRequest;
use App\Http\Requests\UpdatePlanetRequest;
use App\Models\Planet;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planets = Planet::all();

        return view('planets.index', ['planets' => $planets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('planets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanetRequest $request)
    {
        $planet = new Planet;
        $planet->pla_name = $request->pla_name;
        $planet->pla_eng_name = $request->pla_eng_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        $planet->save();
        return redirect('planets');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanetRequest $request, $id)
    {
        $planet = Planet::find($id);
        $planet->pla_name = $request->pla_name;
        $planet->pla_eng_name = $request->pla_eng_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        $planet->save();
        return redirect('/planets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
    }
}
