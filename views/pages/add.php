@extends('layouts.layout')

@section('content')
    <section class="container form">
        <form action="/product/add" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image_path">
            @error('image_path')
            <p style="color:red">{{$message}}</p>
            @enderror
            <input type="text" placeholder="name" name="name" value="{{ old('name') }}">
            @error('name')
            <p style="color:red">{{$message}}</p>
            @enderror
            <textarea name="description" placeholder="description"> {{old('description') }}</textarea>
            @error('description')
            <p style="color:red">{{$message}}</p>
            @enderror
            <input type="text" placeholder="price" name="price" value="{{ old('price') }}">
            @error('price')
            <p style="color:red">{{$message}}</p>
            @enderror
            <select type="text" placeholder="category" name="category_id" value="{{ old('category_id') }}">
                @foreach(\Illuminate\Support\Facades\DB::table('pr_categories')->get() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <p style="color:red">{{$message}}</p>
            @enderror
            <button class="product__btn">Add product</button>
        </form>
    </section>
@endsection
