@extends('admin.dashboard_master')
@section('dashboard')
<div class="py-12 container">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('hs.add.info') }}"><button class="btn btn-info" style="margin-bottom: 10px;">Add
                        Information</button></a>
                <div class="float-right">{{ $science->links() }}</div>
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card-header text-center">Higher Studies Science Information</div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-earning">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Image</th>
                                    <th scope="col" class="text-center">Subject</th>
                                    <th scope="col" class="text-center">Benefits and Details</th>
                                    <th scope="col" class="text-center">Future</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($science as $sc)
                                <tr>
                                    <td class="text-center"><img src="{{ asset($sc->image) }}" alt="" width="80px"
                                            height="80px"></td>
                                    <td class="text-center">{{$sc->subject}}</td>
                                    <td class="text-center">{{$sc->details}}</td>
                                    <td class="text-center">{{$sc->future}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('higher/studies/info/edit/'.$sc->id) }}"
                                            class="btn btn-info">Edit</a>
                                        <a href="{{ url('higher/studies/info/delete/'.$sc->id) }}"
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
