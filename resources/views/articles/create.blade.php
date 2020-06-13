@extends('layout')

@section('content')
<div id="page" class="container p-0 py-4">
    <div id="content">
        <div class="title">
            <h2>Create Article</h2>
        </div>
        <form method="POST" action="{{ route('articles.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Email address</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Article Title">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="excerpt">Example textarea</label>
                <textarea name="excerpt" class="form-control" id="excerpt" rows="3"
                    placeholder="Article Excerpt"></textarea>
                @error('excerpt')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="body">Example textarea</label>
                <textarea name="body" class="form-control" id="body" rows="3" placeholder="Article Body"></textarea>
                @error('body')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="tags">Example select</label>
                <select name="tags[]" class="form-control" id="tags" multiple>
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
                @error('tags')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>
@endsection
