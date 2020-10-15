@extends('layouts.admin')


@section('content')



    <div class="container-fluid">

        <h1>Edit User</h1><hr>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img  class="img-thumbnail" src="{{$user->photo ? url('public/images/',$user->photo->image) : 'http://placehold.it/400x400'}}" height="200px">
            </div>

            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header text-center"><h2>Edit User</h2></div>
                    <div class="card-body">
                        <form method="post" action="{{url('admin/user/update_user',$user->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-8">
                                    <input id="name" type="email" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">Image</label>
                                <div class="col-md-8">
                                    <input id="name" type="file" class="form-control" name="userimage">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">Roll</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="role">

                                        <option value="">Select Role</option>
                                        @foreach($userrole as $role)
                                            <option value="{{$role->id}}" {{$role->id==$user->role_id ? 'selected' : ''}} >{{$role->role_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">Status</label>
                                <div class="col-md-8">
                                    {{--                            <input id="name" type="text" class="form-control" name="status">--}}
                                    <select class="form-control" name="status">
                                        <option value="">select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>

                                </div>
                            </div>

                            <input type="submit" class="form-control btn-outline-light" >

                        </form>


                    </div>

                </div>
            </div>
        </div>

        @if(count($errors)>0)
            <div class="alert-danger">
                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>
                    @endforeach

                </ul>
            </div>
        @endif

    </div>
@endsection
