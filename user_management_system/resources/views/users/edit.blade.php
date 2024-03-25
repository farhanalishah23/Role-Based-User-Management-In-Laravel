@extends('layouts.app')
@section('content')

<h3>Add New Users</h3>
<form action="{{ route('users.update' , $user->id)}}" method="post">
    @csrf
    @method('PUT')
<div class="form-group">
    <label for="name">Text</label>
    <input  class="form-control" type="text" name="name" value="{{$user->name}}">
    @error('name')
       <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input  class="form-control" type="text" name="email" value="{{$user->email}}">
    @error('email')
       <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
 <div class="form-group">
    <label for="password">Password (Keep blank if you want to keep current password)</label>
    <input  class="form-control" type="password" name="password">
    @error('password')
       <span class="text-danger"> {{$message}}</span>
    @enderror
</div> 
<div class="form-group">
    <label for="roles">Roles</label>

    <select  class="form-control" multiple name="roles[]">

    @foreach($roles as $role)
    <option value="{{$role->id}}" @if(in_array($role->id , $user->roles->pluck('id')->toArray())) Selected @endif>{{$role->name}}</option>
    @endforeach

    </select>
    @error('roles')
       <span class="text-danger"> {{$message}}</span>
    @enderror
</div>

<button type="submit" class="btn btn-dark  px-4">Updated User</button>
<a href="{{route('users.index')}}" class="btn btn-dark  px-4">Back</a>
 

@endsection