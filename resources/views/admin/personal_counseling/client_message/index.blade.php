@extends('admin.dashboard_master')
@section('dashboard')
<div class="py-12 container">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-12">
                <div class="float-right">{{ $clientApplication->links() }}</div>
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card-header text-center"> All Application</div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-earning">
                            <thead>
                                <tr>

                                    <th scope="col" class="text-center">Name</th>
                                    <th scope="col" class="text-center">Address</th>
                                    <th scope="col" class="text-center">Number</th>
                                    <th scope="col" class="text-center">Email</th>
                                    <th scope="col" class="text-center">Answer</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientApplication as $ca)
                                <tr>
                                    <td class="text-center">{{$ca->name}}</td>
                                    <td class="text-center">{{$ca->address}}</td>
                                    <td class="text-center">{{$ca->number}}</td>
                                    <td class="text-center">{{$ca->email}}</td>
                                    <td class="text-center">{{$ca->answer}}</td>
                                    <td class="text-center">
                                        @if($ca->status == 0)
                                        <a href="" class="btn btn-danger">Unanswered</a>
                                        @else
                                        <a href="{{ url('client-application-email/'.$ca->id) }}"
                                            class="btn btn-info">Send Mail</a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($ca->status == 0)
                                        <a href="{{ url('client/application/answer/give/'.$ca->id) }}"
                                            class="btn btn-success">Answer</a>
                                        @else
                                        <div style="margin-bottom: 10px;">
                                            <a href="{{ url('client/application/answer/edit/'.$ca->id) }}"
                                                class="btn btn-warning">Edit</a>
                                        </div>
                                        <a href="{{ url('client/application/delete/'.$ca->id) }}"
                                            onclick="return confirm('Are you sure to delete?')"
                                            class="btn btn-danger">Delete</a>
                                        @endif
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
