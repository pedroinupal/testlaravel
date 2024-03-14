<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Conferencias;
use App\Models\Divisiones;
use App\Models\Cities;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::join('conferencias','conferencias.id', '=','team.conference_id')

        ->join('cities','cities.id', '=','team.city_id')
        
        ->join('divisiones','divisiones.id', '=','team.division_id')

        ->select('team.id','team.name','team.titles','team.city_id','team.division_id','team.conference_id','conferencias.nombre_conferencia','cities.city_name','divisiones.nombre_division')
        ->orderBy('team.id')
        ->get();
        //dd($conferences);
        return view('teams.index',compact('teams'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
