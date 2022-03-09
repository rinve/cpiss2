@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Update Information</h2>
        </div>
        <div class="card-body">
            <form action="{{url('hsc/info/update/'.$info->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Image" name="image">
                </div>
                <div class="form-group">
                    <label for="group">Group</label>
                    <select class="form-control" id="group" name="group" required>
                        <option selected value="{{$info->group}}">{{$info->group}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="subject">Subject Name</label>
                    <input type="text" class="form-control" id="subject" value="{{$info->subject}}" name="subject"
                        required>
                </div>
                <div class="form-group">
                    <label for="details">Subject Details and Benefits</label>
                    <textarea class="form-control" name="details" id="details" rows="2" required>{{$info->details}}</textarea>
                </div>
                <div class="form-group">
                    <label for="future">Future</label>
                    <textarea class="form-control" name="future" id="future" rows="2" required>{{$info->future}}</textarea>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
