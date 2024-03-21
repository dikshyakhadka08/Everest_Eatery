<!DOCTYPE html>
<html lang="en">
<head>
  <title>Everest Eatery - Update Chef</title>
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
      max-width: 600px;
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
  </style>
</head>
<body>
  @include("admin.navbar")

  <div class="container">
    <h1>Update Chef</h1>
    <!-- <form action="{{ url('/updatedadminchef', $data->id)}}" method="post" enctype="multipart/form-data">
      @csrf  -->
      <!-- <form action="{{ url('/updatechef/' . $data->id) }}" method="POST" enctype="multipart/form-data"> -->
      <form action="{{ url('/updatedadminchef', $data->id)}}" method="post" enctype="multipart/form-data">
   
    @csrf
    @method('PUT')
      <label for="name">Chef Name</label>
      <input id="name" type="text" name="name" required="" value="{{$data->name}}">
      
      <label for="chefskill">Chef Special Skill</label>
      <input id="chefskill" type="text" name="chefskill" required="" placeholder="Update the Chef's Specialty" value="{{$data->chefskill}}">
      
      <label>Earlier Chef Image</label>
      <img src="/chefpicture/{{$data->image}}" alt="Chef Image">
      
      <label for="image">New Chef Image</label>
      <!-- <input id="image" type="file" name="image" required=""> -->
      <input id="image" type="file" name="image">
      
      
      <input type="submit" value="Update Chef">
    </form>
  </div>

  @include("admin.adminScript")
</body>
</html>
