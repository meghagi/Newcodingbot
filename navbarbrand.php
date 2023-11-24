<html>
<head>
	<title>Student Management System Welcome</title>
	<html>
<head>
	
	<link rel="icon" href="img/apna sweets.png"type="image/png"><!-- title mei icon k liye -->
<meta charset="utf-8">
	<meta name="viewport"content="width=device-width, intial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link  rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">


  
  <script type="text/javascript" src="jquery/jquery.js"></script> 

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style>
  	nav li
  	{
  		
  		display:inline; 
  	}
  </style>
</head>
<body>
	<nav class="navbar navbar-expand bg-dark navbar-dark" id="nav1">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item" id="brand">
                <a class="navbar-brand" href="login.php" >Student CRUD System</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="admin.php">Home</a>
            </li>
            <li class="nav-item" id="hmt">
                <a class="nav-link ms-3 active" href="teacher.php">Home</a>
            </li>
            <li class="nav-item" id="hma">
                <a class="nav-link ms-3 active" href="admission.php">Home</a>
            </li>
            <li class="nav-item" id="lgin">
                <a class="nav-link ms-3" href="login.php" >Login</a>
            </li>
            <li class="nav-item" id="reg">
                <a class="nav-link ms-3" href="register.php">Register</a>
            </li>
            <li class="nav-item" id="mu">
                <a class="nav-link ms-3" href="manage_user.php">Manage User</a>
            </li>
            <li class="nav-item" id="adm">
                <a class="nav-link ms-3" href="manage_admission.php">Manage Admission </a>
            </li>
            <li class="nav-item" id="tec">
                <a class="nav-link ms-3" href="manage_teacher.php" >Manage Teacher</a>
            </li>
            <li class="nav-item" id="mua">
                <a class="nav-link ms-3" href="manage_user_adm.php">Manage User</a>
            </li>
            <li class="nav-item" id="std">
                <a class="nav-link ms-3" href="manage_student.php">Manage Student</a>
            </li>
            <li class="nav-item" id="msa">
                <a class="nav-link ms-3" href="manage_student_admission.php">Manage Student</a>
            </li>
            <li class="nav-item" id="msm">
                <a class="nav-link ms-3" href="manage_student_marks.php">Manage Student Marks</a>
            </li>
        </ul>

        <ul class="navbar-nav justify-content-end">    
            <li calss="nav-item" id="prf">
                <a class="nav-link ms-3" href="useraccount.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prfa">
                <a class="nav-link ms-3" href="useraccount_admission.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prfs">
                <a class="nav-link ms-3" href="useraccount_student.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prft">
                <a class="nav-link ms-3" href="useraccount_teacher.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-inverse bg-dark navbar-dark" id="nav2">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="" >Student CRUD System</a>
        </ul>
        <ul class="navbar-nav justify-content-end">
            <li>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fa fa-bars"></i>                       
                </button>
            </div>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav justify-content-end">
            <li class="nav-item" id="hm">
                <a class="nav-link active ms-3" href="admin.php">Home</a>
            </li>
            <li class="nav-item" id="hmt">
                <a class="nav-link ms-3 active" href="teacher.php">Home</a>
            </li>
            <li class="nav-item" id="hma">
                <a class="nav-link ms-3 active" href="admission.php">Home</a>
            </li>
            <li class="nav-item" id="lgin">
                <a class="nav-link ms-3" href="login.php" >Login</a>
            </li>
            <li class="nav-item" id="reg">
                <a class="nav-link ms-3" href="register.php">Register</a>
            </li>
            <li class="nav-item" id="mu">
                <a class="nav-link ms-3" href="manage_user.php">Manage User</a>
            </li>
            <li class="nav-item" id="adm">
                <a class="nav-link ms-3" href="manage_admission.php">Manage Admission </a>
            </li>
            <li class="nav-item" id="tec">
                <a class="nav-link ms-3" href="manage_teacher.php" >Manage Teacher</a>
            </li>
            <li class="nav-item" id="mua">
                <a class="nav-link ms-3" href="manage_user_adm.php">Manage User</a>
            </li>
            <li class="nav-item" id="std">
                <a class="nav-link ms-3" href="manage_student.php">Manage Student</a>
            </li>
            <li class="nav-item" id="msa">
                <a class="nav-link ms-3" href="manage_student_admission.php">Manage Student</a>
            </li>
            <li class="nav-item" id="msm">
                <a class="nav-link ms-3" href="manage_student_marks.php">Manage Student Marks</a>
            </li>
            <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
            <li calss="nav-item" id="prfa">
                <a class="nav-link ms-3" href="useraccount_admission.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prfs">
                <a class="nav-link ms-3" href="useraccount_student.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prft">
                <a class="nav-link ms-3" href="useraccount_teacher.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prf">
                <a class="nav-link ms-3" href="useraccount.php"><i class="fa fa-user"></i>Profile</a>
            </li>
          </ul>
        </div>
    </div>
</nav>

	</body>