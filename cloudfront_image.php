<!DOCTYPE html>
<html>
<body>

<h1>CloudFront Image</h1>

<!-- Specify Cloudfront URL of image  as Env variables in Elastic Beanstalk or OpsWorks -->
<!-- E.g. specify env variable CLOUDFRONT_IMAGE_URL as https://d1sw5zd4zl7a4f1.cloudfront.net/my_image.png -->
<img src=<?php echo $_SERVER['CLOUDFRONT_IMAGE_URL'] ?> />

</body>
</html>
