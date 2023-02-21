@extends("layouts.master")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>User Information</h5>
                    <div class="d-flex justify-content-around">
                        <a href="{{route("users.edit",$user->id)}}" type="button" class="btn btn-outline-info btn-rounded btn-uppercase mr-2">
                            <i class="ti-settings mr-2"></i> Edit
                        </a>
                        <form action="{{route("users.destroy",$user->id)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-rounded btn-uppercase">
                                <i class="ti-settings mr-2"></i> Delete
                            </button>
                        </form>

                    </div>
                </div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                   aria-describedby="emailHelp" placeholder="Full Name" name="name"  disabled value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Enter email" required name="email" disabled value="{{$user->email}}">
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
