@extends('admin.dashboard_master')
@section('dashboard')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2 class="text-center">Edit Time</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('time/update/'.$editTime->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="day">Day: </label>
                    <input type="text" class="form-control" id="day" name="day" value="{{ $editTime->day }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="startTime">Start Time: </label>
                    <input type="text" class="form-control" id="startTime" name="startTime" value="{{ $editTime->startTime }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="endTime">End Time: </label>
                    <input type="text" class="form-control" id="endTime" name="endTime" value="{{ $editTime->endTime }}"
                        required>
                </div>
                <div class=" pt-4 pt-5 float-right border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
