@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>All Posts</h3>
            @include('posts.item')
            <div class="mt-5">
                <nav>
                    <ul class="pagination">
                        <li aria-disabled="true" aria-label="« Previous" class="page-item disabled"><span aria-hidden="true" class="page-link">‹</span></li>
                        <li aria-current="page" class="page-item active"><span class="page-link">1</span></li> 
                        <li class="page-item"><a href="" class="page-link">2</a></li> 
                        <li class="page-item"><a href="" class="page-link">3</a></li> 
                        <li class="page-item"><a href="" class="page-link">4</a></li> 
                        <li class="page-item"><a href="" class="page-link">5</a></li> 
                        <li class="page-item"><a href="" class="page-link">6</a></li> 
                        <li class="page-item"><a href="" class="page-link">7</a></li> 
                        <li class="page-item"><a href="" rel="next" aria-label="Next »" class="page-link">›</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
