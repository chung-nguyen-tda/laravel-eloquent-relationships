<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getUserByPost($id, Request $request) {
        $user = Post::find($id)->user;
        return $user;
    }
}
