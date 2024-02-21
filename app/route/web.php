<?php

$authUrl = array(
    "/auth",
    "/logout",
);

$appUrl = array(
    "/",
    "/home" => "home.php",
    "/userprofile" => "userProfile.php"
    
);



if($request_uri_path != "/auth" && $_SESSION['loggedInStatus'] == false){
    header("Location: /petmarket/auth");
}
else if($request_uri_path == "/auth" && $_SESSION['loggedInStatus'] == true){
    header("Location: /petmarket/home");
}

if(in_array($request_uri_path, $authUrl)){
    require(ROOT ."app/controller/authentication.php");
}
else if(array_key_exists($request_uri_path, $appUrl)){
    // require(ROOT .'app/controller/home.php');
    $viewPath = $appUrl[$request_uri_path];
    require(ROOT .'app/resources/view/main.php');
}