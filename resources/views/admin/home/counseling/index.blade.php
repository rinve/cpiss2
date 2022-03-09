@extends('admin.dashboard_master')
@section('dashboard')
<div class="py-12 container">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('add.home.counseling')}}"><button class="btn btn-info" style="margin-bottom: 10px;">Add Home Counseling</button></a>
                <div class="float-right">{{ $homeCounseling->links() }}</div>
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card-header text-center">All Home Counseling</div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-earning">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Image</th>
                                    <th scope="col" class="text-center">Details</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($homeCounseling as $sc)
                                <tr>
                                    <td class="text-center"><img src="{{ asset($sc->image) }}" alt="" width="80px"
                                            height="80px"></td>
                                    <td class="text-center">{{$sc->details}}</td>
                                    <td class="text-center">
                                        <a href="{{url('home/counseling/edit/'.$sc->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('home/counseling/delete/'.$sc->id) }}"
                                            onclick="return confirm('Are you sure to delete?')"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
