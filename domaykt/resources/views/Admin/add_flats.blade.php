@extends('layouts.app')

@section('content')
    <div class="bd-example" style="width: 300pt">
        <form method="post" enctype="multipart/form-data"  action="{{route('add_flats.post')}}">
            @csrf
            <div class="mb-3">
                <label>
                    <select name="house_id" id="house_id">
                        @foreach($houses as $house)
                            <option value="{{$house->id}}"> {{$house->address }}</option>
                        @endforeach
                    </select>
                </label>

            </div>
            <div>
                <label>
                    <input type="file" name="select_file" id="select_file">
                </label>
            </div>

            <div>
                <input type="submit" name="upload" class="btn btn-primary" value="Upload">
            </div>
        </form>
    </div>
@endsection
