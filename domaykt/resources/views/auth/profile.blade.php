@extends('layouts.app')

@section('content')
    <div>{{$user['firstname']}}</div>
    <div>{{$user['lastname']}}</div>
    <div>{{$user['login']}}</div>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
