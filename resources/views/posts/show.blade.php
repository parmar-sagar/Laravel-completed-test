@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Post Detail</h3>
            <div class="card mt-3">
                <div class="card-header">{{ 'POST TITLE HERE' }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <span>{{ 'USER NAME HERE' }}</span>
                        <span>{{ '2022-01-01' }}</span>
                    </div>
                    <hr>
                    <div>
                        {{ 'POST CONTENT HERE. Post contents contain line breaks. Reflect the line breaks and sanitize the contents itself on browsers. That means the contents contain only <br> tag, no other tags are contained.' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
