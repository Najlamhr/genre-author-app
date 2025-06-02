<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }
        return response()->json($genre);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($request->only('name'));

        return response()->json(['message' => 'Genre updated', 'data' => $genre]);
    }

    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        if (!$genre) 

        $genre->delete();

        return response()->json(['message' => 'Genre deleted']);
    }
}
