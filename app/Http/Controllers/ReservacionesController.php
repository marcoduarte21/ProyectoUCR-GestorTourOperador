<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservacionesController extends Controller
{
    public function index(){
        return view('reservaciones.index');
    }

    public function create(){
        return view('reservaciones.create');
    }

    public function show($reservacion){
        
compact('reservacion');

    return view('reservaciones.show', compact('reservacion'));
    }

    public function edit(){

    }

    public function delete(){

    }
}
