<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        return back();
        }
}
