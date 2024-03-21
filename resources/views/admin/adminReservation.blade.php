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
<div>
    <br>
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/adminreservation.css"> 
<table bgcolor="gray" >
    <tr bgcolor="black" align="center">
    <th>Guest Name</th>
<th>Email</th>
<th>Phone</th>
<th>Date</th>
<th>Time</th>
<th>Message</th>
    </tr>
    @foreach($data as $datas)
    <tr align="center">
        <td>{{$datas->name}}</td>
        <td>{{$datas->email}}</td>
        <td>{{$datas->phone}}</td>
        <td>{{$datas->date}}</td>
        <td>{{$datas->time}}</td>
        <td>{{$datas->message}}</td>
</tr>

@endforeach
</div>

  </div>
  <div class="pagination">
    {{$data->links()}}
</div>
 
  @include("admin.adminScript")
  
      <!-- page-body-wrapper ends -->

   
  </body>
</html>