<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    public function index() {
        
        $libros = Libro::all();

        return $libros;

    }

    public function create() {

    }

    public function store() {

    }

    public function show($idLibro) {
        $libro = Libro::findOrFail($idLibro);

        return view('libros.show', compact('libro'));
    }

    public function edit($idLibro) {
        return "El libro para editar es el : {$idLibro}";
    }

    public function upate($idLibro) {

    }

    public function destroy($idLibro) {

    }
}
