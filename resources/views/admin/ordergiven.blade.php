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
      <div class="container" style="margin-left:250px">
    
        <h1 style="color: #007bff; text-align: center;">Customer Orders</h1>

        <form action="{{ url('/search') }}" method="get" style="text-align: center; margin-bottom: 20px;">
    @csrf
    <input type="text" name="search" style="color: blue; padding: 8px;">
    <button class="btn btn-success" type="submit" style="padding: 8px 12px; color: white; background-color: #28a745; border: 1px solid #28a745; cursor: pointer;">Search</button>
</form>
<link rel="stylesheet" type="text/css" href="/admin/assets/css/ordergiven.css">  
        <table>
          <tr align="center" >
            <th>Customer Name</th>
            <th>Phone No.</th>
            <th>Address</th>
            <th>Food Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Amount</th>
          </tr>

          @foreach($data as $datas)
          <tr align="center">
            <td>{{$datas->username}}</td>
            <td>{{$datas->phone}}</td>
            <td>{{$datas->address}}</td>
            <td>{{$datas->foodname}}</td>
            <td>{{$datas->price}} $</td>
            <td>{{$datas->quantity}}</td>
            <td>{{$datas->price * $datas->quantity}}$</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>

    <!-- <div class="menupagination"> -->
<div class ="pagination">
    {{$data->links()}}
</div>


    @include("admin.adminScript")
  
    <!-- page-body-wrapper ends -->

  </body>
</html>
