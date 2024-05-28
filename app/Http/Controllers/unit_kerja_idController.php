<?php

namespace App\Http\Controllers;

use App\Models\unit_kerja_id; 
use Illuminate\Http\Request;

class unit_kerja_idController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_unit_kerja_id = unit_kerja_id::all();
        return view('unit_kerja_id.index', ['list_unit_kerja_id'=>$list_unit_kerja_id]);
        //kirim array data ke view pasien index menggunakan assosiasif array
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