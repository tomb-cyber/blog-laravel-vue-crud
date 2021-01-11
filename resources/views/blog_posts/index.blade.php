@extends ('layout')

@php
    $pageHeading = 'Blog feed';
@endphp 

@section('content')

    <div class="container-fluid" >
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-6 offset-md-1 mb-4">
                @auth
                <div class="post-block-create">
                    <button onclick="location.href='/blogs/create'">Create a new post</button>
                </div>
                @endauth
                
                @foreach ($blogPosts as $blogPost)
                    <post-block 
                    :post="{{ json_encode($blogPost->toJson()) }}" 
                    :author-name="'{{ addslashes($blogPost->author->name) }}'"
                    :author-description="'{{ addslashes($blogPost->author->description) }}'"
                    :is-public-feed="true"
                    ></post-block>
                @endforeach

                <div class="d-flex justify-content-center mt-2 mb-2">{{ $blogPosts->links() }}</div>
            </div>
            <div class="col-2 offset-md-1">
                <author-info></author-info>
            </div>
        </div>
    </div>

@endsection