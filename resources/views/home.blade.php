@extends('layout')

@php
    $pageHeading = 'Home';
@endphp

@section('content')

<div class="container-fluid" >
    <div class="row">
        <div class="col-2">
            <a href="/blogs" class="btn btn-light" role="button">< Back to feed</a>
        </div>

        <div class="col-6 offset-md-1 mb-4">
            <div class="post-block-create">
                <button onclick="location.href='/blogs/create'">Create a new post</button>
            </div>
            @foreach ($blogPosts as $blogPost)
                <post-block 
                :post="{{ json_encode($blogPost->toJson()) }}" 
                :author-name="'{{ addslashes($blogPost->author->name) }}'"
                :author-description="'{{ addslashes($blogPost->author->description) }}'"
                :is-public-feed="false"
                ></post-block>
            @endforeach
            <div class="d-flex justify-content-center mt-2 mb-2">{{ $blogPosts->links() }}</div>
        </div>

        <div class="col-2 offset-md-1">
            <account-side-nav csrf="{{ csrf_token() }}"></account-side-nav>
        </div>
    </div>
</div>

@endsection
