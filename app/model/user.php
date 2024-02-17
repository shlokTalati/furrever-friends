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
    $sql = "INSERT INTO user (, `created_on`) VALUES (, current_timestamp())";
    $sql = "INSERT INTO users (name, email, password, phone, dob, city) VALUES ('$name', '$email', '$password', '$phone', '$dob', '$city')";
}


?>