<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hall::all();
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
        $hall = new Hall();

        $hall->name ="Зал";
        $hall->number_of_rows = 0;
        $hall->seats_in_row = 0;
        $hall->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hall $hall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hall $hall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hall $hall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $res = Hall::destroy($id);
    }
  }