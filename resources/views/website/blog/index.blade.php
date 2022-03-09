@extends('website.website_master')
@section('website')
    <div class="container">
        <h1 class="text-center mt-2 text-info">Blog</h1>
        <hr>
        @foreach($blogs as $blog)
        <div class="row">
            <div class="col-md-6">
                <div class="video-container">
                    <iframe width="100%" height="200" src="{{$blog->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="text-center text-info">{{$blog->name}}</h3>
                <hr>
                <p><span class="text-info">Details:</span> {{$blog->details}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection
