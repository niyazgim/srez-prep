<section class="container form">
  <form action="/product/add" method="post" enctype="multipart/form-data">
    <input type="file" name="image_path">
    <p style="color:red"></p>
    <input type="text" placeholder="name" name="name" value="">
    <p style="color:red"></p>
    <textarea name="description" placeholder="description"></textarea>
    <p style="color:red"></p>
    <input type="text" placeholder="price" name="price" value="">
    <p style="color:red"></p>
    <select type="text" placeholder="category" name="category_id" value="">
      <option value=""></option>
    </select>
    <p style="color:red"></p>
    <button class="product__btn">Add product</button>
  </form>
</section>