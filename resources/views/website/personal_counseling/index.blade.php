@extends('website.website_master')
@section('website')
<div class="container">
    <div class="text-center">
        <h1 class="text-center mt-2 text-info">Personal Counseling Time</h1>
        <hr>
        <table class="table table-striped table-info pcTable m-auto">
            <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($counseling_time as $ct)
                <tr>
                    <th scope="row">{{$ct->day}}</th>
                    <td>{{$ct->startTime}} - {{$ct->endTime}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <div class="row mt-5 mb-5">
        <div class="col-md-4" id="pcApply">
            <div class="mb-2 text-center">
                <img src="{{ asset('website/images/logo.png') }}" width="150px" height="65px" alt="SPISS">
            </div>
            <div>
                <h4 class="text-center text-info">Apply For Personal Counseling</h4>
            </div>
        </div>
        <div class="col-md-8">
            <form id="ajax-personal-counseling" class="mb-5" method="post" action="{{route('store.personal.counseling.form')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name"
                        required>
                </div>
                <div class="form-group">
                    <label for="address">Address: </label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address"
                        required>
                </div>
                <div class="form-group">
                    <label for="number">Phone Number: </label>
                    <input type="text" class="form-control" id="number" name="number" placeholder="Enter Your Phone Number"
                        required>
                </div>
                <div class="form-group">
                    <label for="email">Email address: </label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Enter Your Email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <div id="form-messages"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
