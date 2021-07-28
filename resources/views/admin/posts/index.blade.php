@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('deleted'))
        <div class="alert alert-success"><strong>{{ session('deleted') }}</strong> Deleted correctly.</div>
    @endif

    <h1 class="mt-4">Articles</h1>
    <a class="btn btn-primary mb-4" href="{{ route('admin.posts.create') }}">New article</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th colspan="4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.posts.show', $item->id) }}">SHOW</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.posts.edit', $item->id) }}">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', $item->id) }}" method="POST" onSubmit="return confirm('Sei sicuro di voler eliminare questo articolo?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                    <td>
                        @if ($item->category)
                            <a class="btn btn-secondary"href="{{ route('admin.categories.show', $item->category->id) }}">{{ $item->category->name }}</a>
                            
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection