@extends('layout')

@php
    $pageHeading = 'My information';
@endphp

@section('content')

<div class="container-fluid" >
    <div class="row">
        <div class="col-2">
            <a href="/blogs" class="btn btn-light" role="button">< Back to feed</a>
        </div>

        <div class="col-6 offset-md-1 mb-4 account-info" >
            <div>
                <h4>Your name: </h4>
                <p class="body-font-size">{{ Auth::user()->name }}</p>
            </div>
            <div> 
                <h4>Description of yourself: </h4>
                <p class="body-font-size">{{ Auth::user()->description }}</p>
            </div>
            <div class="edit-button-block">
                <a href="/settings/edit">Edit</a>
            </div>
            <div class="change-password-block">
                <a href="/password/reset">Reset password</a>
                <a href="/settings/delete">Delete account</a>
            </div>
        </div>

        
        <div class="col-2 offset-md-1" >
            <account-side-nav csrf="{{ csrf_token() }}"></account-side-nav>
        </div> 
    </div>
</div>

@endsection