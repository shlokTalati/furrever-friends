<?php session_start();
error_reporting(0);
?>

<!-- Define the root path -->
<?php define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/furreverfriends/');

$parsed_path = parse_url($_SERVER['REQUEST_URI']);
$request_uri_path = str_replace('/furreverfriends', '', $parsed_path['path']); // Remove the /furreverfriends from the URL
$segment = explode('/', trim($request_uri_path, '/')); // Get the URL segments

?>


<?php  
//Session Variables

// $_SESSION['loggedInStatus'] - Boolean
// $_SESSION['user'] - Array of user data 

?>