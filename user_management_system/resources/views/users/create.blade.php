@extends('layouts.app')
@section('content')

<h3>Add New Users</h3>
<form action="{{ route('users.store')}}" method="post">
    @csrf
<div class="form-group">
    <label for="name">Text</label>
    <input  class="form-control" type="text" name="name">
    @error('name')
       <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input  class="form-control" type="text" name="email">
    @error('email')
       <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input  class="form-control" type="password" name="password">
    @error('password')
       <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="roles">Roles</label>

    <select  class="form-control" multiple name="roles[]">

    @foreach($roles as $role)
    <option value="{{$role->id}}">{{$role->name}}</option>
    @endforeach

    </select>
    @error('roles')
       <span class="text-danger"> {{$message}}</span>
    @enderror
</div>

<button type="submit" class="btn btn-dark  px-4">Create User</button>


@endsection