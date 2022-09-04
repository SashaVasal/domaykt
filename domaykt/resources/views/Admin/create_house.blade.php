@extends('layouts.app')

@section('content')
    <div class="bd-example" style="width: 300pt">
        <form method="post" action="{{route('create_house.post')}}">
            @csrf
            <div class="mb-3">
                <label>
                    <select name="stroy_id" id="stroy_id">
                        @foreach($stroys as $stroy)
                            <option value="{{$stroy->id}}"> {{$stroy->name}}</option>
                        @endforeach
                    </select>
                </label>
                @error('stroy_id')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Status object</label>
                <label for="status_object"></label>
                <select name="status_object" id="status_object">
                    <option value="1">Сделан</option>
                    <option value="2">Будет сделано</option>
                </select>
                @error('status_object')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" id="image" name="image">
                @error('image')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <label for="address"></label><input type="text" id="address" name="address">
                @error('address')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Start date</label>
                <label for="start_date"></label><input type="date" id="start_date" name="start_date">
                @error('start_date')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">End date</label>
                <label for="end_date"></label><input type="date" id="end_date" name="end_date">
                @error('end_date')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Floors</label>
                <label for="floors"></label><input type="number" id="floors" name="floors">
                @error('floors')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">longitude </label>
                <label for="longitude"></label><input type="text" id="longitude" name="longitude">
                @error('longitude')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Latitude </label>
                <label for="latitude"></label><input type="text" id="latitude" name="latitude">
                @error('latitude')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

{{--            <div class="mb-3">--}}
{{--                <label class="form-label">Floors </label>--}}
{{--                <label for="latitude"></label><input type="number" id="floors" name="floors">--}}
{{--                @error('floors')--}}
{{--                <div class="alert">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <div class="mb-3">
                <label class="form-label">Entrance </label>
                <label for="entrance"></label><input type="text" id="entrance" name="entrance">
                @error('entrance')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Is floor </label>
                <label for="is_floor"></label><input type="checkbox" id="is_floor" name="is_floor">
                @error('is_floor')
                <div class="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <input type="submit" value="Вход" class="button">
            </div>
        </form>
    </div>
@endsection
