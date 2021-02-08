<html>
<body>

<?php

//Load aws-sdk
require __DIR__.'/vendor/autoload.php';

$cloudFront = new Aws\CloudFront\CloudFrontClient([
    'region'  => 'us-east-1',
    'version' => '2014-11-06'
]);

//set expiry of signed URL to 5 minutes
$expires = time() + 300;

// Create a signed URL for the resource using the canned policy
$signedUrlCannedPolicy = $cloudFront->getSignedUrl([

// specify the cloudfront URL of your image, e.g. https://d1sw5zd4zl7a4f1.cloudfront.net/my_image.png
    'url'         => $_SERVER['CLOUDFRONT_IMAGE_URL'],
    'expires'     => $expires,

// specify path to the private key file on your EC2 instance, e.g. /home/ubuntu/cf-private-key.pem
    'private_key' => '/etc/pki/tls/private/cf-private-key.pem',

// specify the key pair id, e.g. APKAJ63NC4PRMGWKG6VQ
    'key_pair_id' => $_SERVER['CLOUDFRONT_KEY_PAIR_ID']
]);

?>

<h1>Signed CloudFront Image</h1>

<img src=<?php echo $signedUrlCannedPolicy; ?> />


</body>
</html>
