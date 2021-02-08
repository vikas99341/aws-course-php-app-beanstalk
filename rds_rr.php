<!DOCTYPE html>
<html>
<body>

<h1>RDS Read Replica db</h1>

<?php

// Setup RDS Read Replica connection details - RDS_RR_HOSTNAME, DB_USERNAME and DB_PASSWORD as Env Variables in Elastic Beanstalk or OpsWorks
// E.g. Set Env variable RDS_RR_HOSTNAME to myrds-rr.cle1covvccqa.us-east-1.rds.amazonaws.com:3306

$con=mysqli_connect($_SERVER['RDS_RR_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD']);

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to RDS Read Replica/MySQL: " . mysqli_connect_error();
  }else {
  echo "Connected to RDS Read Replica/MySql DB";
  }

mysqli_close($con);
?>

</body>
</html>
