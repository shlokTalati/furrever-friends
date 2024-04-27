<?php

$authUrl = array(
    "/authentication"
);

$appUrl = array(
    "/" => "home.php",
    "/home" => "home.php",
    "/userprofile" => "user-profile.php",
    "/faq"=> "faq.php", 
    "/listpet"=> "list-pet.php",
    "/browsepet"=> "browse-pet.php",
    "/exploreyourtype"=> "explore-your-type.php",
    "/typeresult"=> "type-result.php",
    "/aboutus"=> "about-us.php",
    "/blog"=> "blog.php",
    "/petdetails"=> "pet-details.php",
    "/wishlist"=> "wishlist.php",
    "/adopt"=> "adopt.php",
    "/requests" => "requests.php",
    "/processing"=>"processing.php"
    
);

if($request_uri_path != "/authentication" && $_SESSION['loggedInStatus'] == false){
    header("Location: /furreverfriends/authentication");
}
else if($request_uri_path == "/authentication" && $_SESSION['loggedInStatus'] == true){
    header("Location: /furreverfriends/home");
}

if($request_uri_path == '/authentication'){
    require(ROOT ."app/controller/authentication.php");
}
else if(array_key_exists($request_uri_path, $appUrl)){
    include(ROOT .'app/controller/'.$appUrl[$request_uri_path]);
}
