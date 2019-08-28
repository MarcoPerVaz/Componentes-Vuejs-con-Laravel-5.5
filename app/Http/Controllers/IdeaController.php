<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importado
use App\Idea;

class IdeaController extends Controller
{
    public function getIdeas()
    {
        return Idea::orderBy('id', 'DESC')->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);

        Idea::create($request->all());

        return; /* Significa que no devuelve nada pero interrupe el flujo del código */
    }
}
