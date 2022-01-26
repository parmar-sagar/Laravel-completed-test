@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>All Posts</h3>
            @include('posts.item')
            <div class="mt-5">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
