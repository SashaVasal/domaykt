@extends('layouts.app')

@section('content')
    @foreach($houses as $house)
        <a href="/see_house/{{$house->id}}"> {{$house->address}}</a>
    @endforeach
@endsection
