@extends('website.website_master')
@section('website')
<div class="container">
    <h1 class="text-center text-info mt-2">Contact Us</h1>
    <hr>
    <form id="ajax-contact" class="mb-5" method="post" action="{{route('store.contact.form')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email address: </label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                placeholder="Enter Your Email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="message">Message or Question: </label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-info">Submit</button>
            <div id="form-messages"></div>
        </div>
    </form>
    <hr>
    <h1 class="text-center text-info">Our Address</h1>
    <hr>
    <div class="row mt-5 mb-5">
        <div class="col-md-3">
            <div class="mb-5">
                <img src="{{ asset('website/images/logo.png') }}" width="150px" height="65px" alt="SPISS">
            </div>
            @if(App\Models\Address::count() > 0)
            <div>
                <i class="fas fa-globe"></i> {{$info->address}}
            </div>
            <div>
                <i class="fas fa-phone-volume"></i> <a href="">{{$info->number}}</a>
            </div>
            <div>
                <i class="fas fa-envelope-open-text"></i> <a href="">{{$info->email}}</a>
            </div>
        </div>
        <div class="col-md-9">
            <iframe
                src="{{$info->map_link}}"
                width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        @endif
    </div>
</div>
@endsection