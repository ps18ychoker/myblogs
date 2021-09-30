<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($slug){

//        $post = Post::where('slug',$slug)->firstOrFail();
        $post = Post::query()->where('slug',$slug)->firstOrFail();
//        $post = DB::table('blogs')->where('slug',$slug)->first();
//        dd($post);
//        $post->body='changed value';
//        $post->save();
//        if(!$post){
//            abort(404);
//        }
//        $blogs = [
//            'my-first-post' => 'foo',
//            'my-second-post' => 'bar',
//        ];
//
//        if(!array_key_exists($post,$blogs)){
//            abort(404);
//        }
//        return view('post',['post' => $blogs[$post]]);
        return view('post',['post' => $post]);
    }
}
