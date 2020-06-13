@extends('layout')

@section('content')
<div class="title">
    <h2>{{ $article->title }}</h2>
</div>
<img src="/images/banner.jpg" alt="" class="image image-full" />
{{ $article->body }}

<p>
    @foreach ($article->tags as $tag)
    <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">
        {{ $tag->name }}
    </a>
    @endforeach
</p>
@endsection
