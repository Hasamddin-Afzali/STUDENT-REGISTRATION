<?php 
error_reporting(0);
include 'include/conn.php';
if(isset($_POST['submit']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $gender = $_POST['gender'];
	 $sql = "INSERT INTO students (full_name,email,gender)
	 VALUES ('$name','$email','$gender')";
	 if (mysqli_query($conn, $sql)) {
		
    //header("Location:http://localhost/studentRegistration/index.php");
    $success =  "<p class='alert alert-success'> Data Inserted successfully !</p> ";
	 } else {
		$error =  " <p class='alert alert-danger'>Error: </p>" . $sql .  "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container py-5 vh-100">
      <div class="row d-flex justify-content-center h-100 align-items-center">
        <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body p-3">
                  <div class="col header-img my-3">
                    <img src="img/header-logo.png" class="img-fluid" alt="LOGO">
                  </div>
                  <?php echo "$success"; 
                        echo "$error";
                  ?>
                  <div class="card-title">
                    <h5 class=" mb-4">Student Registration Form</h5>
                  </div>
                  <form action="index.php" method="post" name="login">
                    <div class="form-outline">
                      <input type="text" placeholder="Full Name..." name="name" class="form-control mb-3 focus-none" required>
                    </div>
                    <div class="col">
                      <input type="email" placeholder="Email..." name="email" class="form-control mb-3 focus-none" required>
                    </div>
                    <div class="col">
                      <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" required>Male
                        <label class="form-check-label" for="radio1"></label>
                      </div>
                      <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female" required>Female
                        <label class="form-check-label" for="radio2"></label>
                      </div>
                      </div>
                      <hr>
                    <div class="col">
                        <button type="submit" class="btn btn-success w-100 btn-block" name="submit">Register</button>
                    </div>
                    <hr>
                    <div class="col">
                        <a href="include/data.php"><button type="button" class="btn btn-primary w-100 btn-block" name="submit">Show Data</button></a>
                    </div>
                  </form>         
                </div>
              </div> 
          </div>
        </div>
        <p class="text-center text-light">2022 &copy; Hasamuddin.com.tr</p>
      </div>
    </div>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>