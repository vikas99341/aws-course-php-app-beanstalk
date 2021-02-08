<!DOCTYPE html>
<html>
<body>

<h1>RDS db</h1>

<?php

// Setup RDS connection details - RDS_HOSTNAME, DB_USERNAME and DB_PASSWORD as Env Variables in Elastic Beanstalk or OpsWorks
// E.g. Set Env variable RDS_HOSTNAME to myrds.cle1covvccqa.us-east-1.rds.amazonaws.com:3306
 
$con=mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD']);

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to RDS/MySQL: " . mysqli_connect_error();
  }else {
  echo "Connected to RDS/MySql DB";
  }

mysqli_close($con);
?>

</body>
</html>
