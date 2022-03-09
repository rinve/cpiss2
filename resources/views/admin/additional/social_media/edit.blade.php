@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Update Social Media</h2>
        </div>
        <div class="card-body">
            <form action="{{url('social/media/update/'.$socialMedia->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" value="{{$socialMedia->facebook}}" name="facebook"
                        required>
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" value="{{$socialMedia->twitter}}" name="twitter"
                        required>
                </div>
                <div class="form-group">
                    <label for="linkedIn">LinkedIn</label>
                    <input type="text" class="form-control" id="linkedIn" value="{{$socialMedia->linkedIn}}" name="linkedIn"
                        required>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
