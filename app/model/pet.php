<?php
require(ROOT . "app/config/Database.php");
class Pet extends Database
{

    //Register a new Pet in the database
    public function register_pet($user_email, $species_id, $breed_id, $name, $gender, $age, $nature, $food_preference, $vaccination_status, $extra_info, $availability, $photo_path)
    {
    $sql = "INSERT INTO listed_pet (user_email, species_id, breed_id, name, gender, age, nature, food_preference, vaccination_status, extra_info, availability, photo_path) 
    VALUES ('$user_email', $species_id, $breed_id, '$name', '$gender', $age, '$nature', '$food_preference', '$vaccination_status', '$extra_info', $availability, '$photo_path')";

    // Execute the query
    $result = mysqli_query($this->connection, $sql);

    // Check if the query was successful
    if ($result) {
        return 1;
    } else {
        echo "Error: " . mysqli_error($this->connection);
        return 0;
    }
    }
   

    // Get all the pet data
    public function get_pet_data()
    {
        $sql = "SELECT * FROM listed_pet";

        try{
            // Execute the query
            $result = mysqli_query($this->connection, $sql);
        }
        catch(Exception $e){
            echo $e->getMessage();
        }

        // Check if any rows were returned
        $petData = array();
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $petData[] = $row;
            }
            return $petData;
        }
    }

    // Get Pet Details of a particular pet by ID
    public function get_pet_data_by_id($petId) {
        // Query to fetch pet details by ID
        $query = "SELECT * FROM listed_pet WHERE id = $petId";
        $result = mysqli_query($this->connection, $query);
    
        // Check if query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            // Fetch pet details
            $petDetails = mysqli_fetch_assoc($result);            
            return $petDetails;

        } else {
            return null; // Pet details not found
        }
    }



    //Get all the data from a particular table
    public function get_all_data($table_name){
        //$table_name will be the table Name
        //Eg. $pet = get_all_data('breed');

        $sql = "SELECT * FROM $table_name";

            // Execute the query
            $result = mysqli_query($this->connection, $sql);

            if($result != false){

                // Check if any rows were returned
                $data = array();
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        $data[] = $row;
                    }
                    return $data;
                }
            }
            else{
                return "Error: " . mysqli_error($this->connection);
            }
    }


    public function get_data_by_constraint($table_name, $constraint, $constraint_value, $bool){
        
        //Eg. $pet = get_data_by_constraint('listed_pet', 'user_email', $_SESSION['user']['email'], false)
        //This will return all the pets that are not listed by the current user

        //True bool will give data that matches the constraint
        //False bool will give data that DIFFERS the constraint

        if($bool == true){
            $sql = "SELECT * FROM $table_name where $constraint = ";
        }
        else{
            $sql = "SELECT * FROM $table_name where NOT $constraint = ";
        }

        //Check if the constraint value is an integer or a string
        if(is_int($constraint_value)){
            $sql .= $constraint_value;
        } else {
            $sql .= "'$constraint_value'";
        }


            // Execute the query
            $result = mysqli_query($this->connection, $sql);

            if($result != false){

                // Check if any rows were returned
                $data = array();
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        $data[] = $row;
                    }
                    return $data;
                }
            }
            else{
                return "Error: " . mysqli_error($this->connection);
            }
    }

    public function get_field_by_constraint($table_name, $field, $constraint, $constraint_value){

    }

    //Create Function to check if a pet is already added by a particular user in wishlist
    private function check_wishlist($user_email, $pet_id){
        $sql = "SELECT * FROM wishlist WHERE user_email = '$user_email' AND pet_id = $pet_id";

        // Execute the query
        $result = mysqli_query($this->connection, $sql);

        // Return 1 is the pet is already added to the wishlist
        if (mysqli_num_rows($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }


    // Add a pet to the wishlist
    public function add_to_wishlist($user_email, $pet_id)
    {

        if ($this->check_wishlist($user_email, $pet_id) == 1) {

            return 0;

        } else {
            $sql = "INSERT INTO wishlist (user_email, pet_id) VALUES ('$user_email', $pet_id)";

            // Execute the query
            $result = mysqli_query($this->connection, $sql);

            // Check if the query was successful
            if ($result) {
                return 1;
            } else {
                echo "Error: " . mysqli_error($this->connection);
                return 0;
            }
        }
    }

    public function get_wishlist($user_email){
        $sql = "SELECT * FROM wishlist WHERE user_email = '$user_email'";

        // Execute the query
        $result = mysqli_query($this->connection, $sql);

        // Check if any rows were returned
        $wishlist = array();
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $wishlist[] = $row;
            }
            return $wishlist;
        }
        else{
            return 0;
        }
    }

}
?>