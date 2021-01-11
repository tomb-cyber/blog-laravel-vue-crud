@extends ('layout')

@php
    $pageHeading = 'Edit your blog post';
@endphp 

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="/blogs" class="btn btn-light" role="button">< Back to feed</a>
            </div>
            <div class="col-8 body-text">
                <form method="POST" action="/blogs/{{ $blogPost->id }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group" >
                        <label for="title">Title</label>
                        <input 
                            class="form-control @error('title') is-invalid @enderror"
                            type="text"
                            id="title"
                            name="title" 
                            placeholder="Write your title here"
                            value="{{ $blogPost->title }}">

                        @error('title')
                            <p class="invalid-feedback">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea 
                            class="form-control @error('body') is-invalid @enderror" 
                            rows="15" 
                            id="body" 
                            name="body" 
                            placeholder="Write your blog post here"
                            >{{ $blogPost->body }}</textarea>

                        @error('body')
                            <p class="invalid-feedback">{{ $errors->first('body') }}</p>
                        @enderror
                    </div>

                    <button class="btn btn-primary" type="submit">Publish</button>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

@endsection