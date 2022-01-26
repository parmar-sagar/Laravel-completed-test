@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Post Detail</h3>
            <div class="card mt-3">
                <div class="card-header">{{ $post->title }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <span>{{ $post->user->name }}</span>
                        <span>{{ date('Y-m-d',strtotime($post->posted_at)) }}</span>
                    </div>
                    <hr>
                    <div>
                        {!! $post->content !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
