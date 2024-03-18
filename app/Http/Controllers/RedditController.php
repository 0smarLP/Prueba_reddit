<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Category;
use Inertia\Inertia;


class RedditController extends Controller
{
    /**
    * Index  - Muestra la vista principal
    *
    * @return \Illuminate\Http\Response
    */
    public function index(): \Inertia\Response
    {
        $categories = Category::all();

        return Inertia::render('Reddit', ['categories' => $categories]);
    }

    /**
    * getPost - Obtiene los posts de Reddit
    * @param  mixed $category
    * @return \Illuminate\Http\Response
    */
    public function getPosts($category): \Inertia\Response
    {
        $url = "https://www.reddit.com/r/{$category}/.json";

        $response = Http::get($url);

        if (!$response->successful()) {

            return response()->json(['error' => 'No se pudo obtener los posts de Reddit'], 500);
        }

        $posts = $response->json()['data']['children'];
        $categories = Category::all();

        return Inertia::render('Reddit', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
}
