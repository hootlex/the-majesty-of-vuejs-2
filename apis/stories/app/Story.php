<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = ['plot', 'writer', 'upvotes', 'downvotes'];

    public static function findOrAbort($id){
        if (!$story = Story::find($id)) {
            $error = [
                'error' => [
                    'code' => 'ERR-NOTFOUND',
                    'http_code' => '404',
                    'message' => 'Requested story cannot be found in the database.',
                ]
            ];
            return \Response::json($error, 404);
        }
        return $story;
    }
}
