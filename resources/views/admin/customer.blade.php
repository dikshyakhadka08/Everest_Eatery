

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
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/admincustomer.css"> 
    <div style="position: relative; top: 60px; right: -100px; margin-left:200px">
        <div class="headline" style="color:white">Customers Detail</div>
   
        <table>
        <tr align="center">
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach($data as $datas)
                <tr align="center">
                    <td>{{$datas->name}}</td>
                    <td>{{$datas->email}}</td>
                    <td>
                        @if($datas->usertype == "0")
                            <a href="{{url('/deletecustomer',$datas->id)}}"class="btn btn-danger">Delete</a>
                        @else
                            Unavailable
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
   

  </div>
  
  <div class="pagination">
    {{$data->links()}}
</div>


  @include("admin.adminScript")

  <!-- page-body-wrapper ends -->

  </body>
</html>
