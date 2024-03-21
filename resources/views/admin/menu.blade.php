<title>Everest Eatery</title>
<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
 
    @include("admin.adminCSS")
 </head>
  <body>
  <div class="container-scroller" >
  @include("admin.navbar")
  <div style ="position:relative; top:50px; margin-left:250px;">
  <h3 style="color:white">Add New Food Item</h3>
    <!-- <form action ="{{url('/importfood')}}" method="post" enctype="multipart/form-data "> -->
    <form action="{{ url('/importfood') }}" method="post" enctype="multipart/form-data" style="max-width: 400px; margin: 20px;">
    @csrf
    <div style="margin-bottom: 15px;">
        <label for="items" style="font-weight: bold;color:white;">Items</label>
        <input style="color: black; padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 3px;" type="text" id="items" name="items" required placeholder="Write the Item's name">
    
        @error('items')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        
    </div>
    <div style="margin-bottom: 15px;">
        <label for="items" style="font-weight: bold;color:white;">Category</label>
        <input style="color: black; padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 3px;" type="text" id="category" name="category" required placeholder="Write the Category's name">
        @error('category')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="price" style="font-weight: bold; color:white;">Price</label>
        <input style="color: black; padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 3px;" type="number" id="price" name="price" required placeholder="Item's price">
        @error('price')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="image" style="font-weight: bold; color:white;">Image</label>
        <input style="color: black; padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 3px;" type="file" id="image" name="image" required>
        @error('image')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div style="margin-bottom: 15px; color:white;">
        <label for="details" style="font-weight: bold;">Details</label>
        <input style="color: black; padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 3px;" type="text" id="details" name="details" required placeholder="Details of Item">
        @error('details')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input class="btn btn-primary" type="submit" value="Save" style="color: black; background-color: #ffffff; border: 0.5px solid #000000; padding: 8px 12px; cursor: pointer; width: 100%; box-sizing: border-box;">
    </div>
</form>



<div>
    <br>
  
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/adminmenustyle.css">  
<table bgcolor="gray">
    <tr align="center">
        <th >Food Items</th>
        <th>Price</th>
        <th>Category</th>
        <th>Image</th>
        <th>Details</th>
        <th>Update Action</th>
        <th>Delete Action</th>
       
    </tr>
    
      
    @foreach($data as $datas)
        <tr align="center">
            <td width="100" >{{$datas->Items}}</td>
            <td>{{$datas->Price}}$</td>
            <td width="50">{{$datas->Category}}</td>
            <td><img height="180" width="200" src="/foodpicture/{{$datas->Image}}"></td>
            <td width="250">{{$datas->Details}}</td>
            <td width="110"><a href ="{{url('/updatemenu',$datas->id)}}" class="btn btn-primary">Update</a></td>
            <td width="110"><a href ="{{url('/deletemenu',$datas->id)}}" class="btn btn-danger">Delete</a></td>
           
        </tr>
    @endforeach
</table>


</div>

</div>


  @include("admin.adminScript")
  
      <!-- page-body-wrapper ends -->
   
   
  </body>
</html>