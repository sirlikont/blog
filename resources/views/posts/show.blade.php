@extends('partials.layout')
@section('title', 'New Posts')
@section('content')
    <a href="{{ route('posts.index') }}" class="btn btn-soft btn-primary mb-4">Back to Posts</a>
    <div class="card bg-base-100 shadow-sm w-1/2 mx-auto">
        <div class="card-body">
            <table class="table table-zebra">
                <tbody>
                    <tr class="hover:bg-base-300!">
                        <th>ID</th>
                        <td>{{ $post->id }}</td>
                    </tr>
                    <tr class="hover:bg-base-300!">
                        <th>Title</th>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr class="hover:bg-base-300!">
                        <th>Content</th>
                        <td>{!! $post->displayBody !!}</td>
                    </tr>
                    <tr class="hover:bg-base-300!">
                        <th>Created At</th>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                    <tr class="hover:bg-base-300!">
                        <th>Updated At</th>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection
