@extends('layouts.app')

@section('content')
    <div class="bd-example" style="width: 300pt">
        <form method="post" action="{{route('setup_slide.post')}}">
            @csrf
            <div>
                <select name="first_slide">
                    @foreach($houses as $house)
                        <option value="{{$house->id}}">{{$house->address}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <select name="second_slide">
                    @foreach($houses as $house)
                        <option value="{{$house->id}}">{{$house->address}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <select name="third_slide">
                    @foreach($houses as $house)
                        <option value="{{$house->id}}">{{$house->address}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit" value="Вход" class="button">
            </div>
        </form>
    </div>
@endsection
