<title>Everest Eatery</title>
<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>

  
  @include("admin.adminCSS")
 
</head>
<body>

<div class="container-scroller">
    @include("admin.navbar")

    <div class="add-chef-container" style="  top:20px; margin-left: 250px;">
        <div class="add-chef-title" style="color:white; ">Add Chef</div>

          <!-- Display validation errors -->
          <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->

        

        <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data" class="chef-form">
            @csrf
            <div class="form-group" style="color:white">
                <label for="name"><h4>Name </h4></label>
                <input type="text" name="name" required placeholder="Enter Chef's Name Here." style="color: blue;">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror  
            </div>

            <div class="form-group" style="color:white">
                <label for="chefskill"><h4>Chef-Skill</h4></label>
                <input type="text" name="chefskill" required placeholder="Enter Chef's Skilled Speciality."
                       style="color: blue;">
                       @error('chefskill')
                    <p class="text-danger">{{ $message }}</p>
                @enderror       
            </div>

            <div class="form-group">

        <label for="image" style="font-weight: bold; color:white;">Image</label>
        <input style="color: black; padding: 8px; width: 100%; box-sizing: border-box; border: 1px solid #ccc; border-radius: 3px;" type="file" id="image" name="image" required>
        @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
    </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Save">
            </div>
        </form>

        <hr>
          <link rel="stylesheet" type="text/css" href="/admin/assets/css/adminchefstyle.css"> 
        
        <table>
            <tr bgcolor="#343a40" align="center">
                <th>Chef Name</th>
                <th>Chef's Speciality</th>
                <th>Image</th>
                <th>Update Action</th>
                <th>Delete Action</th>
            </tr>

            @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->chefskill}}</td>
                    <td height="100px" width="100px"><img src="/chefpicture/{{$data->image}}"></td>
                    <td><a href="{{url('/updatechef',$data->id)}}" class="btn btn-primary">Update</a></td>
                    <td><a href="{{url('/deletechef',$data->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@include("admin.adminScript")

</body>
</html>
