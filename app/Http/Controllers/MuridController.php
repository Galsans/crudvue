<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $murid = Murid::all();
        return response()->json($murid);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
        ]);
        return Murid::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Murid $murid)
    {
        //
        return $murid;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Murid $murid)
    {
        //
        $request->validate([
            'nama'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
        ]);
        $murid->update($request->all());
        return $murid;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Murid $murid)
    {
        //
        $murid->delete();
        return response()->json([
            'message'=>'data murid deleted'
        ]);
    }
}
