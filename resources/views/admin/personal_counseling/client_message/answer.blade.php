@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Answer</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('client/application/answer/store/'.$clientApplication->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email address: </label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$clientApplication->email}}" required>
                </div>
                <div class="form-group">
                    <label for="answer">Answer: </label>
                    <input type="text" class="form-control" id="answer" name="answer" value="{{$clientApplication->answer}}" required>
                </div>
                <div class=" pt-4 pt-5 float-right border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
