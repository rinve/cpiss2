@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Create Blog</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.blog')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Blog Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Blog Name" name="name"
                        required>
                </div>
                <div class="form-group">
                    <label for="details">Blog Details</label>
                    <input type="text" class="form-control" id="details" placeholder="Enter Blog Details" name="details"
                        required>
                </div>
                <div class="form-group">
                    <label for="link">Blog Link(YouTube Embedded Link)</label>
                    <input type="text" class="form-control" id="link" placeholder="Blog Link(YouTube Embedded Link)" name="link"
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
