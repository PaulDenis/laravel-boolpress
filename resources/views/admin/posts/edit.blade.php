@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit the article number {{ $post->id }}</h1>

        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Inserisci il titolo dell'articolo" name="title" value="{{ old('title', $post->title)}}">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Text</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="6" name="content" placeholder="Inserisci il testo dell'articolo">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                    <option value="">-- Select a category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ ($category->id == old('category_id', $post->category_id)) ? 'selected' : '' }}
                            >{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>    
            <div class="form-group mb-5">
                <h4>Choose the tags</h4>

                @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">
                        @if ($errors->any())
                            <input class="form-check-input" name="tags[]" type="checkbox" id="tag-{{ $tag->id }}" value="{{ $tag->id }}"
                            {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}
                        >
                            
                        @else
                            <input class="form-check-input" name="tags[]" type="checkbox" id="tag-{{ $tag->id }}" value="{{ $tag->id }}"
                            {{ $post->tags->contains($tag->id) ? 'checked' : '' }}
                        >  
                        @endif
                        <label class="form-check-label" for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
                    </div>
                @endforeach
            </div>
            @error('tags')
                    <small class="text-danger">{{ $message }}</small>
            @enderror
            <button type="submit" class="btn btn-primary">Edit</button>
            <a class="btn btn-secondary ml-2" href="{{ route('admin.posts.index') }}">All posts</a>
        </form>
    </div>
    
@endsection