<?php 

function login($email, $password, $conn){
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            return $user;
        }
        else{
            return null;
        }
    } 

function signup($name, $email, $password, $phone, $dob, $city, $conn){
    $sql = "INSERT INTO user (name, email, password, phone, dob, city) VALUES ('$name', '$email', '$password', '$phone', '$dob', '$city')";
    $result = mysqli_query($conn, $sql);

    if($result){
        return true;
    }
    else{
        return false;
    }
}


?>