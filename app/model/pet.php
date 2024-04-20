<?php
require(ROOT . "app/config/Database.php");
class Pet extends Database
{

    




    public function register_pet($user_email, $species_id, $breed_id, $name, $gender, $age, $nature, $food_preference, $vaccination_status, $extra_info, $availability, $photo_path)
{
    $sql = "INSERT INTO listed_pet (user_email, species_id, breed_id, name, gender, age, nature, food_preference, vaccination_status, extra_info, availability, photo_path) 
    VALUES ('$user_email', $species_id, $breed_id, '$name', '$gender', $age, '$nature', '$food_preference', '$vaccination_status', '$extra_info', $availability, '$photo_path')";

    // Execute the query
    $result = mysqli_query($this->connection, $sql);

    // Check if the query was successful
    if ($result) {
        echo "Data inserted successfully.";
        return 1;
    } else {
        echo "Error: " . mysqli_error($this->connection);
        return 0;
    }
}


    // public function register_pet($user_email, $species_id, $breed_id, $name, $gender, $age, $nature, $food_preference, $vaccination_status, $extra_info, $availability)
    // {
    //     $sql = "INSERT INTO listed_pet (user_email, species_id, breed_id, name, gender, age, nature, food_preference, vaccination_status, extra_info, availability,photo_path) 
    //     VALUES ('$user_email', $species_id, $breed_id, '$name', '$gender', $age, '$nature', '$food_preference', '$vaccination_status', '$extra_info', $availability)";

    //     // Execute the query
    //     $result = mysqli_query($this->connection, $sql);

    //     // Check if the query was successful
    //     if ($result) {
    //         echo "Data inserted successfully.";
    //         return 1;
    //     } else {
    //         echo "Error: " . mysqli_error($this->connection);
    //         return 0;
    //     }
    // }

   

  
    

//    ths is working
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

    public function getPetDetailsById($petId) {
        // Query to fetch pet details by ID
        $query = "SELECT * FROM listed_pet WHERE id = $petId";
        $result = mysqli_query($this->connection, $query);
    
        // Check if query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            // Fetch pet details
            $petDetails = mysqli_fetch_assoc($result);
            // Close database connection
            
            return $petDetails;
        } else {
            // Close database connection
            
            return null; // Pet details not found
        }
    }

    public function get_all_data($table_name){
        //$table_name will be the table Name
        //Eg. $pet = get_all_data('breed');
        $sql = "SELECT * FROM $table_name";

            // Execute the query
            $result = mysqli_query($this->connection, $sql);

            if($result != false){

                // Check if any rows were returned
                $faq = array();
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
      
}
?>