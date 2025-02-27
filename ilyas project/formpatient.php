<?php
$n=$_post['patient-name'];
$a=$_post['contact-number'];
$b=$_post['email'];
$c=$_post['doctor'];
$d=$_post['appointment-date'];
$e=$_post['appointment-time'];
$con=mysqli_connect("localhost","root","","ilyasreservation");
$sql="INSERT INTO patientsdata(name,contactnumber,email,doctor,appointmentdate,appointmenttime) values('$n','$a','$b','$c','$d','$e')";
$r=mysqli_query($con,$sql);
if($r)
{
echo "PATIENYS DATA ADDED SUCCESSFULLY";
}
else
{
echo "PATIENYS DATA  NOT ADDED SUCCESSFULLY";
}
?>