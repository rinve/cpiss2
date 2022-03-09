@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Edit Answer</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('contact/answer/update/'.$contacts->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="message">Message or Question: </label>
                    <textarea class="form-control" id="message" name="message" rows="3" required>{{$contacts->message}}</textarea>
                </div>
                <div class="form-group">
                    <label for="answer">Answer: </label>
                    <textarea class="form-control" id="answer" name="answer" rows="3" required>{{$contacts->answer}}</textarea>
                </div>
                <div class=" pt-4 pt-5 float-right border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
