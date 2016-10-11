<?php

namespace App\Http\Controllers\Api;

use App\Movie;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
    /**
     * Display a listing of movies
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories= Movie::all();
        return $stories;
	}

    /**
     * Display the specified Movie.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Movie::findOrAbort($id);

    }

    /**
     * Store a newly created Movie in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $story = new Movie($request->all());
        $story->save();
        return $story;
    }

    /**
     * Update the specified Movie in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $story = Movie::findOrAbort($id);

		$story->fill($request->only(['title', 'director']));

        $story->save();

        return $story;
	}

    /**
     * Remove the specified Movie from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Movie::findOrAbort($id);
        $story->delete();

        return \Response::json(['success' => true]);
    }

}