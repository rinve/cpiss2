@extends('website.website_master')
@section('website')
<div id="carouselExampleIndicators" class="carousel slide text-dark mb-5" data-ride="carousel">
    
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    </ol>
    
    <div class="carousel-inner">
        @foreach($sliders as $key => $slide)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <img class="d-block w-100" src="{{ asset($slide->image) }}" alt="First slide">
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<hr>
<div class="container">
    <div class="text-center mt-5 mb-5 moto">
        <small class="text-mute">What We Believe In</small>
        @if($motivations!=null)
        <p class="h4">{{$motivations->details}}</p>
        @endif
    </div>
    <hr>
    <div class="mt-5 mb-5">
        @if($home_counselings!=null)
        <div class="row">
            <div class="col-md-7">
                <h2 class="text-info">About Career Counseling</h2>
                <p>{{$home_counselings->details}}</p>
                <a href="{{ route('counseling') }}" class="btn btn-outline-info" type="button">Learn more</a>
                <a href="{{ route('personal.counseling') }}" class="btn btn-outline-info" type="button">Appointment</a>
            </div>
            <div class="col-md-5">
                <img src="{{ asset($home_counselings->image) }}" class="eImage" height="300" width="100%" alt="iamge">
            </div>
        </div>
        @endif
    </div>
    <hr>
    <div class="mt-5 mb-5">
        @if($ssc!=null)
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset($ssc->image) }}" class="eImage" height="300" width="100%" alt="iamge">
            </div>
            <div class="col-md-7">
                <h2 class="text-info">SSC</h2>
                <p>{{$ssc->image}}</p>
                <a href="{{ route('ssc.science') }}" class="btn btn-outline-info" type="button">Learn more</a>
            </div>
        </div>
        @endif
    </div>
    <hr>
    <div class="mt-5 mb-5">
        @if($hsc!=null)
        <div class="row">
            <div class="col-md-7">
                <h2 class="text-info">HSC</h2>
                <p>{{$hsc->details}}</p>
                <a href="{{ route('hsc.commerce') }}" class="btn btn-outline-info" type="button">Learn more</a>
            </div>
            <div class="col-md-5">
                <img src="{{ asset($hsc->image) }}" class="eImage" height="300" width="100%" alt="iamge">
            </div>
        </div>
        @endif
    </div>
    <hr>
    <div class="mt-5 mb-5">
        @if($higherStudies!=null)
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset($higherStudies->image) }}" class="eImage" height="300" width="100%" alt="iamge">
            </div>
            <div class="col-md-7">
                <h2 class="text-info">Higher Education</h2>
                <p>{{$higherStudies->details}}</p>
                <a href="{{url('higher/studies/art')}}" class="btn btn-outline-info" type="button">Learn more</a>
            </div>
        </div>
        @endif
    </div>
    <hr>
    <div class="mt-5 mb-5">
        <h2 class="text-info text-center">Recent Educational News</h2>
        <hr>
        <div class="row">
            @foreach($news as $n)
            <div class="col-md-4">
                <div class="text-center h4">{{$n->name}}</div>
                <hr>
                {{$n->details}}
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
