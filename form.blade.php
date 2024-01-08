<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body {
  background-color: coral;
}
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
<body style="background-color:coral ">
  
<div class="container"style="background-color:grey " >
  <h1 align="center">UserRegistration form</h1>
  
</div>
<center>
  <form action="{{url('demo12')}}" name="myForm" method="POST" onsubmit="return validateForm()"  enctype="multipart/form-data">
    @csrf
    
    
<div class="container">


<div class="form-group">
      <label for="First Name">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter FirstName" name="Firstname">
      <span class="text-danger">
        @error('Firstname')
            {{$message}}

        @enderror
      </span>
      <x-input type="text" name="Firstname" label="Enter first name"/>
      <x-input type="text" name="Lastname" label="Enter last name"/>
      <x-input type="email" name="email" label="Enter  email"/>
      <x-input type="password" name="Password" label="Enter password"/>

      <button class="btn btn-primary">Submit</button>
  </div>

<br>



  
    <div class="form-group">
      <label for="Last Name">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Lastname" name="Lastname">
       <span class="text-danger">
        @error('Lastname')
            {{$message}}

        @enderror
      </span>
  </div>


<br>



  
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="Email" class="form-control" id="email" placeholder="Email" name="Email">
       <span class="text-danger">
        @error('Email')
            {{$message}}

        @enderror
      </span>
  </div>


<br>



  
    <div class="form-group">
      <label for="Passwoed">Password:</label>
      <input type="password" class="form-control" id="Pwd" placeholder="Enter password" name="Password">
      <span class="text-danger">
        @error('Password')
            {{$message}}

        @enderror
      </span>
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