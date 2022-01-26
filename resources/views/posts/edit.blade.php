@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Edit Post</h3>
            <div class="card mt-3">
                <div class="card-body">
                    <form method="POST" action="{{route('posts.update', $post->id)}}">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ old('title') ?? $post->title }}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" required>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" id="content" rows="3" required>{{ old('content') ?? $post->content }}</textarea>
                            @if ($errors->has('content'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="posted_at">Post Date</label>
                            <input type="datetime-local" name="posted_at" value="{{ old('posted_at') ?? str_replace(' ', 'T', $post->posted_at) }}" class="form-control{{ $errors->has('posted_at') ? ' is-invalid' : '' }}" id="posted_at" required>
                            @if ($errors->has('posted_at'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('posted_at') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="is_draft" value="1" class="form-check-input" id="is_draft" @if(old('is_draft') ?? $post->is_draft) checked="" @endif>
                            <label class="form-check-label" for="is_draft">Draft</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="is_members_only" value="1" class="form-check-input" id="is_members_only" @if(old('is_members_only') ?? $post->is_members_only) checked="" @endif>
                            <label class="form-check-label" for="is_members_only">Members Only</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
