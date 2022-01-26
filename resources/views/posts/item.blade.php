@foreach($posts as $key => $post)
<div class="card mt-3">
    <div class="card-header"><a href="{{url('posts/'.$post->id)}}">{{ $post->title }}</a></div>
    <div class="card-body d-flex justify-content-between">
        <span>{{ $post->user->name }}</span>
        <span>{{ date('Y-m-d',strtotime($post->posted_at)) }}</span>
    </div>
</div>
@endforeach
