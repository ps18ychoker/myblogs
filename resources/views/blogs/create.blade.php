@extends('layout')

@section('form')
    <h2>新建博客</h2>

    <form action="/blogs" method="post">
@csrf
        <div class="field half first">
            <label>标题</label>
            <input name="title"  type="text" value="{{old('title')}}">
            @error('title')
                <p>{{$errors->first('title')}}</p>
            @enderror
        </div>
        <div class="field">
            <label>简介</label>
            <input name="excerpt" type="text" value="{{ old('excerpt') }}">
            @error('excerpt')
                <p>{{$errors->first('excerpt')}}</p>
            @enderror
        </div>
        <div class="field">
            <label>内容</label>
            <textarea name="body" rows="6">{{ old('body') }}</textarea>
            @error('body')
                <p>{{$errors->first('body')}}</p>
            @enderror
        </div>
        <ul class="actions">
            <li><input value="Send Message" class="button alt" type="submit"></li>
        </ul>
    </form>

@endsection
