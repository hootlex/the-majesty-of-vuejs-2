<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'director', 'downvotes'];

    public static function findOrAbort($id){
        if (!$story = Movie::find($id)) {
            $error = [
                'error' => [
                    'code' => 'ERR-NOTFOUND',
                    'http_code' => '404',
                    'message' => 'Requested movie cannot be found in the database.',
                ]
            ];
            return \Response::json($error, 404);
        }
        return $story;
    }
}
