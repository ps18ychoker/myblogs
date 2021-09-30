@extends('layout')

@section('content')
    <!-- Content -->
    <!--
        Note: To show a background image, set the "data-bg" attribute below
        to the full filename of your image. This is used in each section to set
        the background image.
    -->
    <section id="post" class="wrapper bg-img" data-bg="{{ $blog->bg_img }}">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>{{ $blog->title }}</h2>
                    <p>{{ $blog->created_at->format('Y-m-d') }}</p>
                </header>
                <div class="content">
                    {!! $blog->body !!}
                </div>
                <footer>
                    <ul class="actions">
                        @if($blog->id >1)
                            <li><a href="{{ $blog->prevBlogPath() }}" class="button alt icon fa-chevron-left"><span
                                        class="label">Previous</span></a></li>
                        @endif
{{--                        @if($blog->id <$count[0]->id)--}}
                        @if($blog->id <$count)
                            <li><a href="{{ $blog->nextBlogPath() }}" class="button alt icon fa-chevron-right"><span
                                        class="label">Next</span></a></li>
                        @endif
                    </ul>
                </footer>
            </article>
        </div>
    </section>
@endsection
