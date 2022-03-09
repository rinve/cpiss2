@extends('website.website_master')
@section('website')
<div class="container">
    <h1 class="text-center mt-2 text-info">Higher Studies - Arts</h1>
    <hr>
    @foreach ($arts as $ar)
    <div class="row">
        <div class="col-md-5">
            <img src="{{ asset($ar->image) }}" class="eImage" height="300" width="100%" alt="iamge">
        </div>
        <div class="col-md-7">
            <h3 class="text-info text-center">{{$ar->subject}}</h3>
            <hr>
            <span class="text-info h5">Details & Benefits: </span><span>{{$ar->details}}</span>
            <br>
            <span class="text-info h5">Future: </span><span>{{$ar->future}}</span>
        </div>
    </div>
    <hr>
    @endforeach
</div>
@endsection
