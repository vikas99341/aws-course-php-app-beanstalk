<!DOCTYPE html>
<?php

// Add ElastiCache/Memcached server
$mc = new Memcached();

// Setup Memcached endpoint as as Env Variable in Elastic Beanstalk or OpsWorks
// E.g. Set Env variable MEMCACHED_ENDPOINT to mycache.ls62hu.cfg.use1.cache.amazonaws.com

$mc->addServer($_SERVER['MEMCACHED_ENDPOINT'], 11211);

// Set value for a key
$mc->set("somekey", "somevalue");

// Get value for the key
$valuefromcache = $mc->get("somekey");

//succesful connect if value from cache is the same as originally set
$message = 'Connection to Memcached was '.($valuefromcache == 'somevalue' ? 'successful!' : 'not successful.');

?>


<html>
<body>

<h1>ElastiCache/Memcached</h1>

<?php echo $message ?>

</body>
</html>
