<section class="container form">
  <form action="/product/add" method="post" enctype="multipart/form-data">
    <input type="file" name="image_path">
    <p style="color:red">{{$message}}</p>
    <input type="text" placeholder="name" name="name" value="{{ old('name') }}">
    <p style="color:red">{{$message}}</p>
    <textarea name="description" placeholder="description"> {{old('description') }}</textarea>
    <p style="color:red">{{$message}}</p>
    <input type="text" placeholder="price" name="price" value="{{ old('price') }}">
    <p style="color:red">{{$message}}</p>
    <select type="text" placeholder="category" name="category_id" value="{{ old('category_id') }}">
      <option value="{{ $category->id }}">{{ $category->name }}</option>
    </select>
    <p style="color:red">{{$message}}</p>
    <button class="product__btn">Add product</button>
  </form>
</section>