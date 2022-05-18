<?php

include 'connection.php';
$conn = OpenCon();
$doctor_name =  $_REQUEST['doctorname'];

      $room = $_REQUEST['room'];
      $surgery_date =  $_REQUEST['date'];
      $reg_time = $_REQUEST['time'];
      $patient_name = $_REQUEST['patientname'];
      $surgery_type=$_REQUEST['surgerytype'];

      $sql = "INSERT INTO Details (doctor_name,room,surgery_date,reg_time,patient_name,surgery_type)  VALUES ('$doctor_name', 
      '$room','$surgery_date','$reg_time','$patient_name','$surgery_type')";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

</head>
<body>
   
<h4 class=" text-center bg-success m-5 text-light"> You just inserted a new Surgery Details</h4>  
<div class="text-center bg-light p-3 m-2 " style="width:fit-content; position:absolute; left:40%;">
<h5> Doctor Name: &nbsp; <?php
  echo $doctor_name;

  ?>
  <h5> Room Number: &nbsp; <?php
 
  echo $room;

  ?>
  <h5> Surgery Date: &nbsp; <?php

  echo $surgery_date;

  ?>

  </h5>
  <h5> Time: &nbsp; <?php

echo $reg_time;

?>
 &nbsp; hours
</h5>  
<h5> Patient Name: &nbsp; <?php

echo $patient_name;

?>

</h5>
<h5> Surgery Type: &nbsp; <?php

echo $surgery_type;

?>

</h5>  
</div>

  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
</body>
</html>
