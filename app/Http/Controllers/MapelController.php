<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mapel = Mapel::all();
        return response()->json($mapel);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'mapel'=>'required',
            'guru'=>'required',
        ]);
        return Mapel::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Mapel $mapel)
    {
        //
        return $mapel;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        //
        $request->validate([
            'mapel'=>'required',
            'guru'=>'required',
        ]);
        $mapel->update($request->all());
        return $mapel;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
        //
        $mapel->delete();
        return response()->json([
            'message'=>'mapel deleted'
        ]);
    }
}
