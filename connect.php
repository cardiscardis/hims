<?php 
$fname = '';
$lname= '';
$email = '';
$doctor = '';
if(isset($_GET['patientFirstName']) && isset($_GET['patientLastName']) && isset($_GET['patientEmail']) && isset($_GET['doctor']) && isset($_GET['who'])) {
  $fname = $_GET['patientFirstName'];
  $lname= $_GET['patientLastName'];
  $email = $_GET['patientEmail'];
  $doctor = $_GET['doctor'];
  $sender = $_GET['who'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="contact.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script >
    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

<style >
    body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
  .contact-form {
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
    border-top-right-radius: 10% 50%;
    border-bottom-right-radius: 10% 50%;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="index.php" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp ISRAELITE HIMS</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>

          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>








    <div class="container contact-form" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="connect2.php?patientEmail=<?php echo $email?>&doctor=<?php echo $doctor?>&patientLastName=<?php echo $lname?>&patientFirstName=<?php echo $fname?>&sender=<?php echo $sender?>">
                <h3>Send a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" >
                            <input type="submit" name="btnSubmit" class="btnContact"   value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>

</body>
</html>



