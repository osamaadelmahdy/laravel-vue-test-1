<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    public function createpost(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'title' => 'required|min:3 ',
            'body' => 'required|min:3'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'=>'error',
                'errors'=>$validator->errors()
                ]);
        }

        $post = new post ;
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();
    }
}
