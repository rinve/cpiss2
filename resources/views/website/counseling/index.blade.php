@extends('website.website_master')
@section('website')
<div class="container">
    <h1 class="text-center mt-2 text-info">Counseling <button class="btn btn-outline-info" type="button"
            data-toggle="modal" data-target="#targetModal">Ask A Question</button></h1>
    <hr>
    <h3 class="text-info">Commonly Asked Question:</h3><br><br>
    @foreach($counselings as $c)
    <h5 class="text-info">Question: </h5><span>{{$c->message}}</span><br>
    <small class="text-muted">{{$c->name}} AT <span class="text-primary">{{ \Carbon\Carbon::parse($c->created_at)->diffForHumans() }}</span></small>
    @if($c->answer!=null)
    <h5 class="text-info">Answered By CPISS</h5>
    @endif
    <span>{{$c->answer}}</span>
    <hr>
    @endforeach
</div>
<!-- Modal -->
<div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info text-center" id="exampleModalLabel">Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('store.counseling.question') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address: </label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            placeholder="Enter Your Email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="message">Question: </label>
                        <textarea class="form-control" id="message" name="message" rows="2" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info">Ask</button>
                        <div id="form-messages"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
