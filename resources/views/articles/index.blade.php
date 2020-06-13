@extends('layout')

@section('content')
@forelse ($articles as $article)
<div class="title">
    <a href="/articles/{{ $article->id }}">
        <h2>{{ $article->title }}</h2>
    </a>
</div>
<img src="/images/banner.jpg" alt="" class="image image-full" />
<p>
    {{ $article->excerpt }}
</p>
@empty
<p>No articles found</p>

@endforelse
@endsection
