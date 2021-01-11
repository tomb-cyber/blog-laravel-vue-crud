@extends('layout')

@php
    $pageHeading = 'Edit information';
@endphp

@section('content')

<div class="container-fluid" >
    <div class="row">
        <div class="col-2">
        </div>

        <div class="col-6 offset-md-1 mb-4 body-text" >
            <form action="/settings/edit" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <h5>Your name: </h5>
                    <input
                        class="form-control @error('name') is-invalid @enderror" 
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Write your name here"
                        value="{{ Auth::user()->name }}">

                    @error('name')
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                    @enderror
                </div>

                <div> 
                    <h5>Description of your self: </h5>
                    <textarea
                        class="form-control mb-3 @error('description') is-invalid @enderror"                        
                        type="text"
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Write a brief description of yourself here">{{ Auth::user()->description }}</textarea>

                    @error('description')
                    <p class="invalid-feedback">{{ $errors->first('description') }}</p>
                    @enderror
                </div>
                <a href="/settings">Cancel</a>
                <button class="btn btn-primary float-right" type="submit">Save changes</button>
            </form>
        </div>
        
        <div class="col-2 offset-md-1" >
            <account-side-nav csrf="{{ csrf_token() }}"></account-side-nav>
        </div>
    </div>
</div>

@endsection