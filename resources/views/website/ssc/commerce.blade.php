@extends('website.website_master')
@section('website')
<div class="container">
    <h1 class="text-center mt-2 text-info">SSC - Commerce</h1>
    <hr>
    @foreach ($commerces as $com)
    <div class="row">
        <div class="col-md-7">
            <h3 class="text-info text-center">{{$com->subject}}</h3>
            <hr>
            <span class="text-info h5">Details & Benefits: </span><span>{{$com->details}}</span>
            <br>
            <span class="text-info h5">Future: </span><span>{{$com->future}}</span>
        </div>
        <div class="col-md-5">
            <img src="{{ asset($com->image) }}" class="eImage" height="300" width="100%" alt="iamge">
        </div>
    </div>
    <hr>
    @endforeach
</div>
@endsection
