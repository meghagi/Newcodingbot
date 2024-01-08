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



  <title>User registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:#aabb">
  
<div class="container"style="background-color:lightgreen " >
  <h1 align="center">Customerform</h1>
  
</div>
<center>
  <form action="{{url('customer')}}" name="myForm" method="POST" onsubmit="return validateForm()"  enctype="multipart/form-data">
    @csrf
    
    
<div class="container">
<div class="row">
  <div class="col-sm-6">

<div class="form-group">
      <label for="Customer Name"> Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter FirstName" name="name">
      <span class="text-danger">
        @error('name')
            {{$message}}

        @enderror
      </span>
    </div>
  </div>











   
  <div class="col-sm-6">

    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="Email" class="form-control" id="email" placeholder="Email" name="Email">
       <span class="text-danger">
        @error('Email')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>





  
  <div class="col-sm-6">
  
    <div class="form-group">
      <label for="Passwoed">Password:</label>
      <input type="password" class="form-control" id="Pwd" placeholder="Enter password" name="Password">
      <span class="text-danger">
        @error('Password')
            {{$message}}

        @enderror
      </span>
  </div>

</div>
   
  <div class="col-sm-6">
  
    <div class="form-group">
      <label for="ConfirmPasswoed">Confirm Password:</label>
      <input type="password" class="form-control" id="CPwd" placeholder="Enter password" name="CPassword">
      <span class="text-danger">
        @error('Password')
            {{$message}}

        @enderror
      </span>
  </div>

</div>

 
  <div class="col-sm-6">
  
    <div class="form-group">
      <label for="C">Country:</label>
      <input type="text" class="form-control" id="country" placeholder="country" name="country">
      <span class="text-danger">
        @error('country')
            {{$message}}

        @enderror
      </span>
  </div>
</div>
 
  <div class="col-sm-6">
  
    <div class="form-group">
      <label for="State">State</label>
      <input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
      <span class="text-danger">
        @error('state')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>

  <div class="col-sm-12">
  
    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="textarea" class="form-control" id="Address" placeholder="EnterAddress " name="Address">
      <span class="text-danger">
        @error('Address')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>
<div class="col-sm-6">
  
    <div class="form-group">
       <label for="gender">Gender:</label><br>
   Male<input type="radio"  id="gen1" placeholder="Enter gender" name="gen" value='m'>
    Female<input type="radio"  id="gen2" placeholder="Enter gender" name="gen"value="f">

    Other<input type="radio"  id="gen3" placeholder="Enter gender" name="gen" value="o">
  
  
      <span class="text-danger">
        @error('gen')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>
<div class="col-sm-6">
  
    <div class="form-group">
       <label for="date">date of birth:</label><br>
  <input type="date"  id="date" placeholder="Enter date" name="date1">
    
  
      <span class="text-danger">
        @error('date1')
            {{$message}}

        @enderror
      </span>
  
</div>
</div>

 
  <div class="form-group">
   <input type="submit" class="btn btn-primary" name="submit"id="submit">
<a href="Login.php">Login</a>
  
</div>

</div>
</form>
</center>
</body>
</html>