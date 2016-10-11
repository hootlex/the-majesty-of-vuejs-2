<?php

namespace App\Http\Controllers\Api;

use App\Story;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoriesController extends Controller
{
    /**
     * Display a listing of stories
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories= Story::all();
        return $stories;
	}

    /**
     * Display the specified Story.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Story::findOrAbort($id);

    }

    /**
     * Store a newly created Story in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $story = new Story($request->all());
        $story->save();
        return $story;
    }

    /**
     * Update the specified Story in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $story = Story::findOrAbort($id);

		$story->fill($request->only(['plot', 'writer', 'upvotes']));

        $story->save();

        return $story;
	}

    /**
     * Remove the specified Story from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::findOrAbort($id);
        $story->delete();

        return \Response::json(['success' => true]);
    }

}