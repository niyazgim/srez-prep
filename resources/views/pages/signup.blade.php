@extends('layouts.layout')

@section('content')
    <section class="container form">
        <form action="/user/create" method="post">
            @csrf
            <input type="text" placeholder="name" name="name" value="{{ old('name') }}">
            @error('name')
            <p style="color:red">{{$message}}</p>
            @enderror
            <input type="text" placeholder="email" name="email" value="{{ old('email') }}">
            @error('email')
            <p style="color:red">{{$message}}</p>
            @enderror
            <input type="password" placeholder="password" name="password">
            @error('password')
            <p style="color:red">{{$message}}</p>
            @enderror
            <input type="password" placeholder="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
            <p style="color:red">{{$message}}</p>
            @enderror
            <span><input type="checkbox" name="agreement" @if(old('agreement')) checked @endif><p>agree with terms of privacy</p></span>
            @error('agreement')
            <p style="color:red">{{$message}}</p>
            @enderror
            <button class="product__btn">Register</button>
        </form>
    </section>
@endsection
