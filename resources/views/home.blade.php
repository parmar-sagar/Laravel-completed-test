@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- If logged-in user has posts, show all posts written by the user. --}}
            <h3>Your Posts</h3>
            <div class="card mt-3">
                <div class="card-header"><a href="{{-- link to detail page --}}">{{ 'POST TITLE HERE' }}</a></div>
                <div class="card-body">
                    <span class="badge badge-primary">Published</span>
                    <span class="badge badge-success">Members Only</span>
                    <span class="ml-2">Posted: {{ '2022-01-01' }}</span> / <span>Updated: {{ '2022-01-01' }}</span>
                    <div class="mt-3">
                        <a href="{{-- link to detail page --}}">Detail</a> /
                        <a href="{{-- link to edit page --}}">Edit</a> /
                        <form action="#" method="POST" class="d-inline">
                            <button class="btn btn-link p-0 border-0 text-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header"><a href="{{-- link to detail page --}}">{{ 'POST TITLE HERE' }}</a></div>
                <div class="card-body">
                    <span class="badge badge-primary">Published</span>
                    <span class="ml-2">Posted: {{ '2022-01-01' }}</span> / <span>Updated: {{ '2022-01-01' }}</span>
                    <div class="mt-3">
                        <a href="{{-- link to detail page --}}">Detail</a> /
                        <a href="{{-- link to edit page --}}">Edit</a> /
                        <form action="#" method="POST" class="d-inline">
                            <button class="btn btn-link p-0 border-0 text-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header"><a href="{{-- link to detail page --}}">{{ 'POST TITLE HERE' }}</a></div>
                <div class="card-body">
                    <span class="badge badge-secondary">Draft</span>
                    <span class="ml-2">Posted: {{ '2022-01-01' }}</span> / <span>Updated: {{ '2022-01-01' }}</span>
                    <div class="mt-3">
                        <a href="{{-- link to detail page --}}">Detail</a> /
                        <a href="{{-- link to edit page --}}">Edit</a> /
                        <form action="#" method="POST" class="d-inline">
                            <button class="btn btn-link p-0 border-0 text-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- If logged-in user doesn't have posts, show sentence below. --}}
            <p>You have no posts yet. Create a new post <a href="{{-- link to create page --}}">here</a>.</p>

            {{-- If guest users, show sentence below. --}}
            <p>Please login <a href="{{-- link to login page --}}">here</a>.</p>
            <p>If you don't have an account, register <a href="{{-- link to registration page --}}">here</a>.</p>

        </div>
    </div>
</div>
@endsection
