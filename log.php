<?php 
error_reporting(0);
//define variables 
$nameErr=$mobError=$mailError=$passError=$conf_passError=$textareaError=$genderError=$countryError="";
if(isset($_POST['sub'])){
  $mail=$_POST['email'];
  $password=$_POST['password'];
  

  // Email validation
  if(empty($mail))
  {
      $mailError="Email is required";
  }
  else {
      if(!preg_match("/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/",$mail)){
         $mailError="Invalid Email ID";
      }
  }

 // Password validation
 if(empty($password))
 {
     $passError="Password is required";
 }
 else {
     if(strlen($password)<=4 || strlen($password)>=10){
        $passError="Invalid Password size";
     }
 }

 $email="ashutosh.mulay@neosoftmail.com";
 $pass="123456";

  if($mail==$email && $password==$pass){
    header("Location: http://localhost/practice/assignment1/Login_Success.php",TRUE,301);
  }
  else{
      if($mail!=$email && $password==$pass){
       $mailError="Incorrect Email";
      }
      else{
        if($mail==$email && $password!=$pass){
          $passError="Incorrect Password";
        } 
      }
    }
  

}


?>
<head>


<style>
    .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}


     .error{color:red}

</style>




<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0"><img src="Images/logo.jpg" alt="logo" width="50px"
          height="50px"></span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post" >  <!--action="Success.php" -->

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example17">Email address</label>
              &nbsp;&nbsp; <span class="error">*<?php echo $mailError;?> </span> <br/>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example27">Password</label>
              &nbsp;&nbsp; <span class="error">* <?php echo $passError;?> </span> <br/>  
            </div>

            <div class="pt-1 mb-4">
              <input class="btn btn-info btn-lg btn-block" type="submit" name="sub" value="LOG IN"></input>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="Images/login.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>


