@extends('layouts.app')

@section('content')
    <div class="bd-example">
        <form method="post" action="{{route('register.post')}}">
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
@endsection
