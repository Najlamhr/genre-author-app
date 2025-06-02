<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return response()->json(Genre::all());
    }
public function show($id)
{
    $genre = Genre::find($id);

    if (!$genre) {
        return response()->json([
            'message' => 'Genre not found'
        ], 404);
    }
}
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create([
            'name' => $request->name,
        ]);

        return response()->json($genre, 201);
    }
}
