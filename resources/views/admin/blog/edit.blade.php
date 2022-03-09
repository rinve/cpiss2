@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Update Blog</h2>
        </div>
        <div class="card-body">
            <form action="{{url('blog/update/'.$blogs->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Blog Name</label>
                    <input type="text" class="form-control" id="name" value="{{$blogs->name}}" name="name"
                        required>
                </div>
                <div class="form-group">
                    <label for="details">Blog Details</label>
                    <input type="text" class="form-control" id="details" value="{{$blogs->details}}" name="details"
                        required>
                </div>
                <div class="form-group">
                    <label for="link">Blog Link(YouTube Embedded Link)</label>
                    <input type="text" class="form-control" id="link" value="{{$blogs->link}}" name="link"
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
