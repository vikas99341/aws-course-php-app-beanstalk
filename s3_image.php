<!DOCTYPE html>
<html>
<body>

<h1>S3 Image</h1>

<!-- Specify URL of Image in S3 as Env variables in Elastic Beanstalk or OpsWorks -->
<!-- E.g. specify env variable S3_IMAGE_URL as https://s3.amazonaws.com/my_bucket/my_image.png -->
<img src=<?php echo $_SERVER['S3_IMAGE_URL'] ?> />

</body>
</html>
