<!DOCTYPE html>
<html lang="en">
<head>
  <title>Everest Eatery - Update Food Item</title>
  <base href="/public">
  @include("admin.adminCSS")
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    label {
      font-weight: bold;
    }
    input[type="text"],
    input[type="number"],
    input[type="file"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: auto;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #4caf50;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    img {
      max-width: 180px;
      max-height: 180px;
      margin-top: 10px;
    }
    /* Add additional styles for the sidebar and navbar here */
  </style>
</head>
<body>
  @include("admin.navbar")

  <div class="container">
    <h1>Update Food Item</h1>
    <form action="{{ url('/updated', $data->id) }}" method="post" enctype="multipart/form-data">
      @csrf 
      <label for="items">Items</label>
      <input id="items" type="text" name="items" required="" value="{{$data->Items}}">

      <label for="category">Category</label>
      <input id="category" type="text" name="category" required="" value="{{$data->Category}}">
      
      <label for="price">Price</label>
      <input id="price" type="number" name="price" required="" placeholder="Update the item's price" value="{{$data->Price}}">
      
      <label>Earlier Food Image</label>
      <img src="/foodpicture/{{$data->Image}}" alt="Food Image">
      
      <label for="image">New Food Image</label>
      <!-- <input id="image" type="file" name="image" required=""> -->
      <input id="image" type="file" name="image">
      
      <label for="details">Details</label>
      <input id="details" type="text" name="details" required="" placeholder="Details of Item" value="{{$data->Details}}">
      
      <input type="submit" value="Update">
    </form>
  </div>

  @include("admin.adminScript")
</body>
</html>
