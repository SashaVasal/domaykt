@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <label>Создать пользователя с ролем новостройщик</label>
                <form method="post" action="{{route('create_novostroy_user.post')}}" >
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="login">
                        <div class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">firstname</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                        @error('firstname')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">lastname</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                        @error('lastname')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">phone</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                        @error('phone')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <input type="submit" class="button">
                    </div>
                </form>
            </div>

            <div class="col">
                <label>Создать новостройку</label>
                <form method="post" action="{{route('create_stroy.post')}}" >
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select user</label>
                        <select name="user_id" id="user_id">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->login}}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                        @error('number')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                        @error('address')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude">
                        @error('latitude')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude">
                        @error('longitude')
                        <div class="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div>
                        <input type="submit" class="button">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
