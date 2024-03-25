@extends('layouts.app')
@section('content')

<h3>Show User</h3>

<div class="row">
    <div class="col-sm-4">
        <label>Name</label>
        <p>{{$user->name}}</p>
    </div>
    <div class="col-sm-4">
        <label>Email</label>
        <p>{{$user->email}}</p>
    </div>
    <div class="col-sm-4">
        <label>Roles</label>
        <p>
        @foreach($user->roles as $role)
        {{$role->name}}{{!$loop->last ? ',' : ''}}
        @endforeach
        </p>
    </div>
</div>
<a href="{{route('users.index')}}" class="btn btn-dark  px-4">Back</a>


@endsection