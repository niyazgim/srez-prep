@extends('layouts.layout')

@section('content')
<section class="catalog container">
    <h2>Catalog</h2>
    <div class="catalog__wrapper">
        @foreach($products as $product)
            <article class="product">
                <img src="{{'/storage/uploads/'.$product['image_path'] }}" alt="product" class="product__image">
                <p class="product__name">
                    {{ $product->name }}
                </p>
                <p class="product__price">{{$product->price}} $</p>
                <button class="product__btn">
                    Buy
                </button>
            </article>
        @endforeach
    </div>
</section>
@endsection
