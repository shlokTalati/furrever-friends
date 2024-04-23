<?php
require(ROOT . "app/config/Database.php");
class User extends Database
{




    function login($email, $password)
    {
        // Sanitize user inputs to prevent SQL injection
        $email = mysqli_real_escape_string($this->connection, $email);
        $password = mysqli_real_escape_string($this->connection, $password);

        // Prepare the SQL query to fetch user based on email
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            // Check if the entered password matches the stored password
            if ($user['password'] === $password) {
                return $user; // Login successful
            } else {
                return "incorrect_password"; // Incorrect password
            }
        } else {
            return "email_not_found"; // Email not found
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
