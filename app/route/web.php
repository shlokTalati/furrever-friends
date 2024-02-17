<?php 

$userPages = array(
    "/auth",
    "/logout"
);
 
if(in_array($request_uri, $userPages)){
    require('app/controller/auth.php');
}
?>


