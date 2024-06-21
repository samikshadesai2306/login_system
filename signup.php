<?php include '_dbconnect.php';?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>singup</title>
</head>
<body>
<?php require '_nav.php'?>
<?php

$err = "false";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $username=$_POST['username'];
   $passsword=$_POST['passsword'];
   $cpasssword=$_POST['cpasssword'];
   
    if($passsword == $cpasssword){
            $sql = "INSERT INTO `user` (`sr.no`, `username`, `password`, `date`) VALUES ('', '$username', '$password', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success! </strong> <strong>Your entry has been Submited successfully!</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <apan aria-hidden = "true"></span>
                </button>
              </div>';
                
            }
            else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> we are facing some technical issues AND your entry was not successfully!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <apan aria-hidden = "true"></span>
                </button>
                </div>';
            }
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Password do not match.Please enter correct password.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <apan aria-hidden = "true"></span>
        </button>
        </div>';
    }

}

?>


<div class="container mt-5">
    <h1 class ="text-center">Signup to our Website</h1>

    <form action = "signup.php" method="POST">
  <div class="mb-3 ">
    <label for="username" class="form-label">Username</label>
    <input type="text" name ="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 ">
    <label for="passsword" class="form-label">Password</label>
    <input type="password" class="form-control" id="passsword" name="passsword">
  </div>
  <div class="mb-3 ">
    <label class="form-label" for="cpasssword"> Confirm password</label>
    <input type="password" class="form-control" id="cpassword" name="cpasssword">
    <div class="form-label">Make sure to type the same passsword.</div>
  </div>
   <button type="submit" class="btn btn-primary mt-3">SignUp</button> 
</form>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>