<section class="container form">
  <form action="/user/login" method="post">
    <div>
      <input type="text" placeholder="email" name="email" value="{{ old('name') }}">
      <p style="color:red"></p>
    </div>
    <input type="password" placeholder="password" name="password" value="{{ old('email') }}">
    <p style="color:red"></p>
    <button class="product__btn">Login</button>
  </form>
</section>