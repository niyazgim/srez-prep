@extends('layouts.layout')

@section('content')
    <section class="container form">
        <form action="/user/login" method="post">
            @csrf
            <div>
                <input type="text" placeholder="email" name="email" value="{{ old('name') }}">
                @error('email')
                    <p style="color:red">{{$message}}</p>
                @enderror
            </div>
            <input type="password" placeholder="password" name="password" value="{{ old('email') }}">
                @error('password')
                <p style="color:red">{{$message}}</p>
                @enderror
            <button class="product__btn">Login</button>
        </form>
    </section>
@endsection
