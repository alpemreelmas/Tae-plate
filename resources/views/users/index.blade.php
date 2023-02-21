@extends("layouts.master")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="myTable" class="table table-striped table-bordered dataTableTae">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Email Verified At</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Events</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->email_verified_at ?: "-"}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td>
                                    <a href="{{route("users.show",$user->id)}}" type="button" class="btn btn-info btn-floating">
                                        <i class="ti-book text-white"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("js")
    <x-data-table-scripts/>
@endpush
