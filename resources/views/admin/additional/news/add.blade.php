@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Create News</h2>
        </div>
        <div class="card-body">
            <form action="{{route('store.news')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">News Header</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter News Header" name="name"
                        required>
                </div>
                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea class="form-control" name="details" id="details" rows="2" required></textarea>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
