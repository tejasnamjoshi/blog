@extends('layout')

@section('content')
<div id="page" class="container p-0 py-4">
    <div id="content">
        <div class="title">
            <h2>Edit Article</h2>
        </div>
        <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Email address</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Article Title"
                    value="{{ $article->title }}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="excerpt">Example textarea</label>
                <textarea name="excerpt" class="form-control" id="excerpt" rows="3"
                    placeholder="Article Excerpt">{{ $article->excerpt }}</textarea>
                @error('excerpt')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="body">Example textarea</label>
                <textarea name="body" class="form-control" id="body" rows="3"
                    placeholder="Article Body">{{ $article->body }}</textarea>
                @error('body')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
@endsection
