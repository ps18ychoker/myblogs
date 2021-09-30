@extends('layout')

@section('form')
    <h2>修改博客</h2>

    <form action="{{ $blog->path }}" method="post">
        @csrf
        @method('put')
        <div class="field half first">
            <label>标题</label>
            <input name="title"  type="text" value="{{ $blog->title }}">
            @error('title')
            <p>{{$errors->first('title')}}</p>
            @enderror
        </div>
        <div class="field">
            <label>简介</label>
            <input name="excerpt" type="text" value="{{ $blog->excerpt }}">
            @error('excerpt')
            <p>{{$errors->first('excerpt')}}</p>
            @enderror
        </div>
        <div class="field">
            <label>内容</label>
            <textarea name="body" rows="6">{{ $blog->body }}</textarea>
            @error('body')
            <p>{{$errors->first('body')}}</p>
            @enderror
        </div>
        <ul class="actions">
            <li><input value="Send Message" class="button alt" type="submit"></li>
        </ul>
    </form>

@endsection
