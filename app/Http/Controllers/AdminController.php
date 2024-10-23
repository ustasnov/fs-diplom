<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;

class AdminController extends Controller
{

    public function index()
    {
        $halls = Hall::all();
        return view('admin', ["halls" => $halls]);
    }

    public function destroyHall(int $id)
    {
        Hall::destroy($id);
        return redirect('admin');
    }
}
