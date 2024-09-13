    <section class="container">
      <h2 class="product__name">
      </h2>
      <div class="catalog__wrapper">
        <article class="product">
          <img src="{{'/storage/uploads/'.$product['image_path'] }}" alt="product" class="product__image">
          <p class="product__price">{{$product['price']}} $</p>
          <button class="product__btn">
            Buy
          </button>
        </article>
      </div>
    </section>