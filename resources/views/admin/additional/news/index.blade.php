@extends('admin.dashboard_master')
@section('dashboard')
<div class="py-12 container">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('add.news')}}"><button class="btn btn-info" style="margin-bottom: 10px;">Add
                        News</button></a>
                <div class="float-right">{{ $news->links() }}</div>
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card-header text-center">News</div>
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-earning">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">News Header</th>
                                    <th scope="col" class="text-center">Details</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news as $sc)
                                <tr>
                                    <td class="text-center">{{$sc->name}}</td>
                                    <td class="text-center">{{$sc->details}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('news/edit/'.$sc->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('news/delete/'.$sc->id) }}"
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
