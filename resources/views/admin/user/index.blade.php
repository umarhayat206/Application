@extends('layouts.admin')


@section('content')
    <div class="container-fluid">

        <hr>
        <h1>All User</h1>

        <table class="table table-dark table-striped  table-hover table-bordered table-responsive">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <<th>Photo</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Edit User</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($var as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->role_name}}</td>
                <td>{{$user->is_active==0 ? 'Not Active':'Active'}}</td>

{{-- where photo is the function that i define in the user model for one to one relation .if the photo
     exist then print photo else no photo          --}}
                <td><img src="{{$user->photo ? url('public/images/',$user->photo->image) : 'http://placehold.it/400x400'}}" height="80px"></td>
                <td>{{$user->created_at->DiffForHumans()}}</td>
                <td>{{$user->updated_at->DiffForHumans()}}</td>
{{--                <td><a href="{{url('admin/user/'.$user->id.'/edit')}}">Edit</a></td>--}}
                <td><a href="{{url('admin/user/edit_user',$user->id)}}">Edit</a></td>
{{--            With Route    <td><a href="{{route('user.delete',$user->id)}}">Delete</a></td>--}}
                <td><a href="{{url('admin/user/delete_user',$user->id)}}">Delete</a></td>
            </tr>

            @endforeach
            </tbody>
        </table>

    </div>
@endsection
