@extends ('layout')

@php
    $pageHeading = $blogPost->title;
@endphp 

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="/blogs" class="btn btn-light" role="button">< Back to feed</a>
            </div>
            <div class="col-8 body-text">
                <h6>by {{ DB::table('users')->where('id', $blogPost->user_id)->first()->name }}</h6>
                <p>{{ $blogPost->body }}</p>
                
                @can('update-post', $blogPost)
                <div class="edit-button-block border-0 pb-0">
                    <div>
                        <form method="POST" action="/blogs/{{ $blogPost->id }}/delete ">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" type="submit">Delete</button>
                        </form>
                        <a  href="/blogs/{{ $blogPost->id }}/edit">Edit</a>
                    </div>
                </div>
                @endcan
            </div>
            <div class="col">
            </div>
        </div>
    </div>

@endsection