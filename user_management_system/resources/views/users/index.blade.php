@extends('layouts.app')
@section('content')
    
<h3>All Users</h3>
<a href="{{route('users.create')}}" class="btn btn-dark mb-2">Add Users</a>
<div class="table-responsive">
    <table
        class="table table-bordered table-hover" >
        <thead class="table-light">
            
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            @foreach ($users as $user)
             <tr class="table-primary">
                <td >{{$user->id }}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                  @foreach($user->roles as $role)
                     {{$role->name}} {{!$loop->last ? ',':''}}
                  @endforeach
                </td>
                <td>
                    <a method="post" class="btn btn-sm btn-dark" href="{{route('users.show', $user->id )}}" >View</a>
                    <a method="post" class="btn btn-sm btn-dark" href="{{route('users.edit', $user->id )}}" >Edit</a>
                    <form method="post" class="d-inline" action="{{route('users.destroy' , $user->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
       
    </table>
</div>

@endsection