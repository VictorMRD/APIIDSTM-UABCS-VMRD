<?php

namespace App\Http\Controllers;
use App\Models\alumnos;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class alumnosController extends Controller
{
    public function getAll(): View
    {
        $alumnos = alumnos::all();

        return view('main', ['alumnos' => $alumnos]);
    }

    public function getID($id): View
    {
        $alumnos = alumnos::find($id);

        // Check if the record was found
        if (!$alumnos) {
            abort(404); // Or handle the case where the record is not found
        }

        // Pass the retrieved data to the 'main' view
        return view('main', ['alumnos' => $alumnos]);
    }
}
