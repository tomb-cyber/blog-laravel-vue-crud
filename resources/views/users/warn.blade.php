@extends('layout')

@php
    $pageHeading = 'Delete account';
@endphp

@section('content')

<div class="container-fluid" >
    <div class="row">
        <div class="col-2">
        </div>

        <div class="col-6 offset-md-1 mb-4" >
            <div class="confirmation">
                <h4 class="text-danger mb-4">Are you sure you want to delete your account?</h4>
                <a href="/settings">Cancel</a>
                <form class="d-inline ml-5" action="/settings/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="delete-button" type="submit">Delete</button>
                </form>
                
            </div>
        </div>

        <div class="col-2 offset-md-1" >
            <account-side-nav csrf="{{ csrf_token() }}"></account-side-nav>
        </div>
    </div>
</div>

@endsection