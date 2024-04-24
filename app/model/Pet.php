<?php
require_once(ROOT . "app/model/Base.php");
class Pet extends Base
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



    public function get_browse_pet_data($user_email){
        $sql = "SELECT * FROM listed_pet WHERE NOT user_email = '$user_email' AND availability = 1";

        // Execute the query
        $result = mysqli_query($this->connection, $sql);

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

    public function update_availability($pet_id){
        $sql = "UPDATE listed_pet SET availability = 0 WHERE availability = 1 AND id = $pet_id";

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

    public function new_adoption($adopter_id, $pet_id, $owner_id, $address, $reason_to_adopt, $past_experience, $home_description, $existing_pets, $existing_children,$status){

        $sql = "INSERT INTO adoption (adopter_id, pet_id, owner_id, address, reason_to_adopt, past_experience, home_description, existing_pets, existing_children,status) VALUES ('$adopter_id', $pet_id, '$owner_id', '$address', '$reason_to_adopt', '$past_experience', '$home_description', $existing_pets, $existing_children,'$status')";

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

    


    public function get_pending_requests($owner_id){
        $sql = "SELECT * FROM adoption WHERE owner_id = '$owner_id' AND status = 'pending'";

        // Execute the query
        $result = mysqli_query($this->connection, $sql);

        // Check if any rows were returned
        $pending_requests = array();
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $pending_requests[] = $row;
            }
            return $pending_requests;
        }
        else{
            return 0;
        }
    }

    public function approve_adoption($adoption_id, $pet_id, $owner_id){

        $update_availability = $this->update_availability($pet_id);

        $sql = "UPDATE adoption SET status = 'approved' WHERE status = 'pending' and id = $adoption_id and owner_id = '$owner_id'";
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

    public function reject_adoption($adoption_id, $pet_id, $owner_id){

        $sql = "UPDATE adoption SET status = 'rejected' WHERE status = 'pending' and id = $adoption_id and pet_id = $pet_id and owner_id = '$owner_id'";
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
