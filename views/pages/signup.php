    <section class="container form">
      <form action="/user/create" method="post">
        <input type="text" placeholder="name" name="name" value="{{ old('name') }}">
        <p style="color:red">{{$message}}</p>
        <input type="text" placeholder="email" name="email" value="{{ old('email') }}">
        <p style="color:red">{{$message}}</p>
        <input type="password" placeholder="password" name="password">
        <p style="color:red">{{$message}}</p>
        <input type="password" placeholder="password_confirmation" name="password_confirmation">
        <p style="color:red">{{$message}}</p>
        <span><input type="checkbox" name="agreement" @if(old('agreement')) checked @endif>
          <p>agree with terms of privacy</p>
        </span>
        <p style="color:red">{{$message}}</p>
        <button class="product__btn">Register</button>
      </form>
    </section>