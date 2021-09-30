<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        //    $blogs = \App\Models\Blog::query()->latest()->take(3)->get();
        $blogs = \App\Models\Blog::all()->take(3);
//        $blogs = Blog::query()->latest('id')->take(1)->get();
//        $blogs = \App\Models\Blog::all();
        //    return $blogs;
        return view('homepage', ['blogs' => $blogs]);
    }

    public function show(Blog $blog)//$blog = Blog::where('id',1)->first()
    {
//        $blog = \App\Models\Blog::query()->findOrFail($id);
//        $count = Blog::query()->latest('id')->get();
//        dd($blog,$count);
        $count = Blog::query()->count();
//    return $blog;
        return view('blogs.show', ['blog' => $blog, 'count' => $count]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store()
    {

//        \request()->validate([
//            'title' => ['required', 'max:20'],
//            'excerpt' => 'required',
//            'body' => 'required'
//        ], [
//            'required' => '请输入博客的:attribute',
//            'title.max' => ':attribute长度最多为20'
//        ], [
//            'title' => '主题',
//            'body' => '内容'
//        ]);
        $data = $this->validataData();
        $data[bg_img] = 'banner4.jpg';
//        dd(\request()->all());
        Blog::query()->create($data);
//        $blog = new Blog();
//        $blog->title = \request('title');
//        $blog->excerpt = \request('excerpt');
//        $blog->body = \request('body');
//        $blog->bg_img = '/banner4.jpg';
//        $blog->save();

        return redirect('/');
    }

    public function edit(Blog $blog)
    {
//        $blog = Blog::query()->findOrFail($id);
//        return view('blogs.edit',['blog'=>$blog]);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Blog $blog)
    {

//        $blog = Blog::query()->findOrFail($id);
//        $blog->title = \request('title');
//        $blog->excerpt = \request('excerpt');
//        $blog->body = \request('body');
//        $blog->bg_img = '/banner4.jpg';
//        $blog->save();
        $blog->update($this->validataData());
        return redirect($blog->path);
    }

    /**
     * @return array
     */
    private function validataData(): array
    {
//        return \request()->validate([
//            'title' => ['required', 'max:20'],
//            'excerpt' => 'required',
//            'body' => 'required'
//        ]);
        return \request()->validate([
            'title' => ['required', 'max:20'],
            'excerpt' => 'required',
            'body' => 'required'
        ], [
            'required' => '请输入博客的:attribute',
            'title.max' => ':attribute长度最多为20'
        ], [
            'title' => '主题',
            'body' => '内容'
        ]);

    }
}
