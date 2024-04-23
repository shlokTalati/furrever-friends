<?php 
require(ROOT . "app/model/Base.php");
class User extends Base
{


    function login($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            return $user;
        } else {
            return null;
        }
    }

    function signup($name, $email, $password, $phone, $dob, $city)
{
    // Check if email already exists
    $check_sql = "SELECT * FROM user WHERE email = '$email'";
    $check_result = mysqli_query($this->connection, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        // Email already registered
        return false;

    } else {
        // Proceed with signup
        $sql = "INSERT INTO user (name, email, password, phone, dob, city) VALUES ('$name', '$email', '$password', '$phone', '$dob', '$city')";
        $result = mysqli_query($this->connection, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

   

    function updateUser($name, $email, $password, $phone, $dob, $city)
    {
        $sql = "UPDATE user SET name = '$name', password = '$password' , phone = '$phone', dob = '$dob', city = '$city' WHERE email = $email";
        $result = mysqli_query($this->connection, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }

    }
}
