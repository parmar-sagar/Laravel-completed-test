@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
            </div>
            @endif
            {{-- If logged-in user has posts, show all posts written by the user. --}}
            <h3>Your Posts</h3>
            @foreach($posts as $key => $post)
                <div class="card mt-3">
                    <div class="card-header"><a href="{{url('posts/'.$post->id)}}">{{ $post->title }}</a></div>
                    <div class="card-body">
                        @if($post->is_draft)
                            <span class="badge badge-secondary">Draft</span>
                        @else
                            <span class="badge badge-primary">Published</span>
                        @endif
                        @if($post->is_members_only)
                            <span class="badge badge-success">Members Only</span>
                        @endif
                        <span class="ml-2">Posted: {{ date('Y-m-d',strtotime($post->posted_at)) }}</span> / <span>Updated: {{ date('Y-m-d',strtotime($post->updated_at)) }}</span>
                        <div class="mt-3">
                            <a href="{{url('posts/'.$post->id)}}">Detail</a> /
                            <a href="{{ route('posts.edit', $post->id) }}">Edit</a> /
                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-link p-0 border-0 text-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            @if(Auth::check() && $posts->isEmpty())
                {{-- If logged-in user doesn't have posts, show sentence below. --}}
                <p>You have no posts yet. Create a new post <a href="{{route('posts.create')}}">here</a>.</p>
            @endif

            @guest
                {{-- If guest users, show sentence below. --}}
                <p>Please login <a href="{{ route('login') }}">here</a>.</p>
                <p>If you don't have an account, register <a href="{{ route('register') }}">here</a>.</p>
            @endguest

        </div>
    </div>
</div>
@endsection
