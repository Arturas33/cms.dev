<?php

namespace App\Http\Controllers;

use App\Models\MAPosts;


class MAPostController extends Controller
{
    public function index()
    {
        $posts = MAPosts::all();//
        //formating data to response angular /json
        $response = [

            'posts'=>$posts
        ];
        return response()->json($response, 200 );
    }
}
