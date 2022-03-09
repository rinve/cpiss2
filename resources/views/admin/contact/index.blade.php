@extends('admin.dashboard_master')
@section('dashboard')
<div class="py-12 container">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-12">
                <div class="float-right">{{ $contacts->links() }}</div>
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card-header text-center"> All Contact Messages</div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-earning">
                            <thead>
                                <tr>

                                    <th scope="col" class="text-center" width="15%">Name</th>
                                    <th scope="col" class="text-center" width="5%">Email</th>
                                    <th scope="col" class="text-center" width="25%">Message</th>
                                    <th scope="col" class="text-center" width="25%">Answer</th>
                                    <th scope="col" class="text-center" width="5%">Status</th>
                                    <th scope="col" class="text-center" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $c)
                                <tr>
                                    <td class="text-center">{{$c->name}}</td>
                                    <td class="text-center">{{$c->email}}</td>
                                    <td class="text-center">{{$c->message}}</td>
                                    <td class="text-center">{{$c->answer}}</td>
                                    <td class="text-center">
                                        @if($c->status == 0)
                                        <a href="" class="btn btn-danger">Unanswered</a>
                                        @else
                                        <a href="{{ url('answer-email/'.$c->id) }}" class="btn btn-info">Send Mail</a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($c->status == 0)
                                        <a href="{{ url('contact/answer/give/'.$c->id) }}"
                                            class="btn btn-success">Answer</a>
                                        @else
                                        <div style="margin-bottom: 10px;">
                                            <a href="{{ url('contact/answer/edit/'.$c->id) }}"
                                                class="btn btn-warning">Edit</a>
                                        </div>
                                        <a href="{{ url('contact/delete/'.$c->id) }}"
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
