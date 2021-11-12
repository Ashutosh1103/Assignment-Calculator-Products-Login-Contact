<?php 
error_reporting(0);
//define variables 
$nameErr=$mobError=$mailError=$passError=$conf_passError=$textareaError=$genderError=$countryError="";
if(isset($_POST['sub'])){
     
     $nam=input_field($_POST['name']);
     $mob=input_field($_POST['mobile']);
     $mail=$_POST['email'];
    
     $textarea=$_POST['feedback'];
     $gender=$_POST['gender'];
     $country=$_POST['country'];
     //name validation 
     if(empty($nam))
     {
         $nameErr="Name is required";
     }
     else {
         if(!preg_match("/^[a-zA-Z ]+$/",$nam)){
            $nameErr="Only alphabate allowed";
         }
     }
     //mobile validation 
     if(empty($mob))
     {
         $mobError="Mobile is required";
     }
     else {
         if(!preg_match("/^[6-9][0-9]{9}+$/",$mob)){
            $mobError="Invalid Mobile Number";
         }
     }
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
     
       // Gender validation
       if(empty($gender))
       {
           $genderError="Gender is required";
       }
        // Feedback validation
        if(empty($textarea))
        {
            $textareaError="Feedback is required";
        }
      
    
}
  function input_field($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
  }
?>
<?php
if(isset($_POST['sub'])){
         if($nameErr=="" && $mobError=="" && $mailError==""    && $genderError=="" && $textareaError=="" &&  $countryError==""){
            
            header("Location: http://localhost/practice/assignment1/Success.php",TRUE,301);
           
         }
        }
       ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
<style>
     .error{color:red}
     .background{
         background-image: url('Images/contact.jpg');
         background-repeat: no-repeat;
         
         background-attachment:initial;
            background-size: 100% 100%;

     }
     .margin{
         margin-top: 125%;
     }
</style>
    
</head>
<body>

    <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Get in Touch</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.<br> Our team will come back to you within
    a matter of hours to help you.</p>


<form method="post" action="">
    
<div class="container">
<fieldset>
        <legend>Contact Us:</legend>
<div class="row">

    <!--Grid column-->
    <div class="col-md-8 mb-md-0 mb-5">
        

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-10">
                    <div class="md-form mb-0">
                        <label for="name" class="">Your name</label>
                        <input type="text" id="name" name="name" placeholder="Full Name" class="form-control">
                        
                        <span class="error">* <?php echo $nameErr;?></span><br/>
                    </div>
                </div>
            </div>    
                
                <!--Grid column-->

             <!--Grid row-->
            <div class="row">    

                <!--Grid column-->
                <div class="col-md-10">
                    <div class="md-form mb-0">
                    <label for="email" class="">Email</label>
                        <input type="text" id="email" placeholder="Eg: example@gmail.com" name="email" class="form-control">
                        
                        <span class="error">*<?php echo $mailError;?> </span> <br/>
                    </div>
                </div>
                
                <!--Grid column-->

            </div>
            <!--Grid row-->
            

            <!--Grid row-->
            <div class="row">
                <div class="col-md-10">
                    <div class="md-form mb-0">
                        <!-- <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label> -->
                        <label for="mobile" class="">Mobile</label>
                        <input type="text" class="form-control" placeholder="Eg: 6123456789" name="mobile"/><!--&nbsp;&nbsp; <span class="error">*<?php echo $mobError;?> </span> <br/>-->
                        
                        <span class="error">*<?php echo $mobError;?> </span> <br/>
                    </div>
                
                </div>
                <!--Grid row-->
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-10">
                    <div class="md-form mb-0">

                    <label for="gender" class=>Gender:- </label>
                        <input type="radio" id="male"  name="gender" value="MALE">
                            <label for="male" class="subtitle">MALE</label>
                            <input type="radio" id="female" name="gender" value="FEMALE">
                            <label for="female" class="subtitle">FEMALE</label>
                            <input type="radio" id="others" name="gender" value="OTHERS">
                            <label for="others" class="subtitle">OTHERS</label><br>
                            <span class="error">*<?php echo $genderError;?> </span> <br/>
                    </div>
                </div>
            </div>
            <!--Grid row-->
            <br>
            
             <!--Grid row-->
             <div class="row">

                <!--Grid column-->
                <div class="col-md-10">
                    <div class="md-form mb-0">
                        
                        <label for="name" class="">Country:- </label>
                        <select name="country"  class="input"  id="country">
                            <option name="India" value="India">India</option>
                            <option name="USA" value="USA">USA</option>
                            <option name="RUSSIA" value="RUSSIA">RUSSIA</option>
                            <option name="CHINA" value="CHINA">CHINA</option>
                        </select>
                    </div>
                </div>
                <!--Grid column-->
             </div>
             <br>
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-10">

                    <div class="md-form">
                    <label for="message">Your message</label>
                        <textarea type="text" id="message" placeholder="Please enter your comments" name="feedback" rows="2" class="form-control md-textarea"></textarea>
                       
                        <span class="error">* <?php echo $textareaError;?> </span> <br/>
                    </div>

                </div>
            </div>
            <!--Grid row-->

        
        <br>
        <div class="text-center text-md-left">
            <input type="submit" class="submit bg-primary" value="SEND" name="sub"/>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4 text-center background">
        <!-- <img src="Images/contact.jpg" alt="contact photo" class="w-100 vh-100"> -->
        <ul class="list-unstyled  text-dark margin">
            <li class="font-weight-bold">
            
                Mumbai, India
            </li>

            <li class="font-weight-bold">
            
                + 01 234 567 89
            </li>

            <li class="font-weight-bold ">
            
               ashutosh.mulay@neosoftmail.com
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>
</fieldset>
</div>
</section>
<!--Section: Contact v.2-->

</form>



</body>
</html>