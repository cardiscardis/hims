<?php 
$con=mysqli_connect("localhost","root","","myhmsdb");
$fname = '';
$lname= '';
$email = '';
$doctor = '';
if(isset($_GET['patientFirstName']) && isset($_GET['patientLastName']) && ($_GET['patientEmail']) && isset($_GET['doctor']) && isset($_GET['sender'])) {
  $fname = $_GET['patientFirstName'];
  $lname= $_GET['patientLastName'];
  $email = $_GET['patientEmail'];
  $doctor = $_GET['doctor'];
  $sender = $_GET['sender'];
}
if(isset($_POST['btnSubmit']))
{
  
	$message = $_POST['txtMsg'];

	$query="insert into connect(patientfirstname,patientlastname,patientemail,doctorname,message) values('$fname','$lname','$email','$doctor','$message');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Message sent successfully!");'; 
		echo ($sender == 'doctor') ? 'window.location.href = "doctor-panel.php";' : 'window.location.href = "admin-panel.php";';
		echo '</script>';
    }
}