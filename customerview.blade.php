<!DOCTYPE html>
<html>
<head>
<style type="text/css">

</style>
<script>
/*function validateForm() {
  let x = document.forms["myForm"]["Firstname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  let y = document.forms["myForm"]["Lastname"].value;
  if (y == "") {
    alert("LastName must be filled out");
    return false;
  }
   let z = document.forms["myForm"]["Email"].value;
  if (z == "") {
    alert("Email must be filled out");
    return false;
  }
  let a = document.forms["myForm"]["Password"].value;
  if (a == "") {
    alert("Password must be filled out");
    return false;
  }
}*/

</script>



  <title>Customertable</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
  <h1 style="text-align: center; background-color:rgb(255,125,255,125)">Customer View</h1>
</div>
<table class="table">
  <thead>
  <tr>
    <th>Name</th>
    <th>email</th>
    <th>gender </th>
    <th>adderess</th>  
    <th>state</th>
    <th>country</th>
    <th>DOB </th>
    <th>status</th>

    <th></th>

  </tr>
</thead>
<tbody>
  @foreach($customer as $cust)
  <tr>
<td>{{$cust->name}}</td>
 <td>{{$cust->email}}</td>
 <td>@if($cust->gender=='m')
Male
@elseif($cust->gender=='f')
Female
@else
Other
@endif</td>
 <td>{{$cust->adderess}}</td>
<td>{{$cust->state}}</td>
<td>{{$cust->country}}</td>
<td>{{$cust->DOB}}</td>
<td>@if($cust->status=='1')
active
@else
Inactive
@endif
</td>


  </tr>
  @endforeach
</tbody>
  </table>
  </body>

</html>