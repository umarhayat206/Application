@extends('layouts.admin')


@section('content')
    <div class="container-fluid">
    <hr>
    <h1>Create User</h1>
      <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="card bg-dark text-white">
            <div class="card-header text-center"><h2>Register User</h2></div>
            <div class="card-body">
                <form method="POST" action="{{url('admin/user/store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label text-md-right">Name</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" name="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-8">
                            <input id="name" type="email" class="form-control" name="email">
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
                                <option value="0">Chose role</option>
                                @foreach($var as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label text-md-right">Status</label>
                        <div class="col-md-8">
{{--                            <input id="name" type="text" class="form-control" name="status">--}}
                            <select class="form-control" name="status">
                                <option value="0">select Status</option>
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
