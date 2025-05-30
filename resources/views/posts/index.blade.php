@extends('partials.layout')
@section('title', 'Posts')
@section('content')

    <a href="{{ route('posts.create') }}" class="btn btn-soft btn-primary">Add post</a>
    <div class= "text-center my-2">
        {{ $posts->links() }}
    </div>
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <tr>Actions</tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr class="hover:bg-base-300!">
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <div class="join">
                        <a href="{{ route('posts.show', ['post' => $post]) }}" class=" btn btn-soft join-item btn-info">View</a>
                        <a href="{{ route('posts.edit', ['post' => $post]) }}" class=" btn btn-soft join-item btn-warning">Edit</a>
                        <button form="delete-{{$post->id}}" class="btn btn-soft join-item btn-error">Delete</button>

                        <form id="delete-{{$post->id}}" action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <th>ID</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <tr>Actions</tr>
        </tfoot>
    </table>
    <div class= "text-center my-2">
        {{ $posts->links() }}
    </div>
@endsection
