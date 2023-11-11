<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return auth()->user()->favorites()->paginate(20);
    }

    public function store(Request $request): JsonResponse
    {
        auth()->user()->favorites()->attach($request->product_id);
        return response()->json([
            'success' => true,
        ]);
    }

    public function destroy(string $favorite)
    {
        if(auth()->user()->hasFavorite($favorite)){
            auth()->user()->favorites()->detach($favorite);

            return response()->json([
                'succes' => true,
            ]);
        }

        return response()->json([
            'succes' => false,
            'message' => 'favorite does not exist in this user'
        ]);
    }
}
