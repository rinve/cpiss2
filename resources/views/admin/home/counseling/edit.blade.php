@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Update Information</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('home/counseling/update/'.$homeCounseling->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Image" name="image">
                </div>
                <div class="form-group">
                    <label for="details">Home Counseling Details</label>
                    <textarea class="form-control" name="details" id="details" rows="2" required>{{$homeCounseling->details}}</textarea>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection