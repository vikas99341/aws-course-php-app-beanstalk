<?php

//Load aws-sdk
require __DIR__.'/vendor/autoload.php';

use Aws\DynamoDb\DynamoDbClient;


// Setup region where your DynamoDB table is setup, e.g. us-east-1
$dynamoDb = DynamoDbClient::factory(array('region' => $_SERVER['DYN_REGION'],

        'version' => 'latest',

         ));

$sessionHandler = $dynamoDb->registerSessionHandler(array(
    'table_name' => 'sessions'
));

// Start the session
session_start();

?>

<!DOCTYPE html>
<html>
<body>

<h1>Session</h1>

<!-- if session is not set and form has not been submitted, show form -->
<?php if (!isset($_SESSION['username']) AND empty($_POST['username'])) : ?>

        <strong>Enter name</strong>
        <form action="/dyn_session.php" method="POST">
                <input type="text" name="username"/>
                <input type="submit" name="Submit" value="Submit!" />
        </form>
<?php endif; ?>

<!-- if session is set, show welcome message, else if form has been submitted, set session and show welcome message -->
<?php
        if (isset($_SESSION['username'])) {
                echo "Welcome ". $_SESSION['username']."!"." Refresh this page, if your session is valid, the form will not be shown.";
        } elseif (!empty($_POST['username'])) {

                $_SESSION["username"] = $_POST['username'];
                header("Location: ".$_SERVER['REQUEST_URI']);
                exit();
        }
?>

</body>
</html>
