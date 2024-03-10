<?php
require(ROOT . "app/config/Database.php");
class Pet extends Database
{

    public function register_pet($user_email, $species_id, $breed_id, $name, $gender, $age, $nature, $food_preference, $vaccination_status, $extra_info, $availability)
    {
        $sql = "INSERT INTO listed_pet (user_email, species_id, breed_id, name, gender, age, nature, food_preference, vaccination_status, extra_info, availability) 
        VALUES ('$user_email', $species_id, $breed_id, '$name', '$gender', $age, '$nature', '$food_preference', '$vaccination_status', '$extra_info', $availability)";

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

    public function get_pet_data()
    {
        $sql = "SELECT * FROM listed_pet";

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


        //Get pet data 
        // This is temporalily commented 
        //     public function get_petdata(){
        //         $sql = "SELECT * FROM listed_pet";

        //     // Execute the query
        //     $result = mysqli_query($this->connection, $sql);

        //     // Check if any rows were returned
        //     if (mysqli_num_rows($result) > 0) {
        //         // Output data of each row
        //         while($row = mysqli_fetch_assoc($result)) {
        //             echo "User Email: " . $row["user_email"]. " - Species ID: " . $row["species_id"]. " - Breed ID: " . $row["breed_id"]. " - Name: " . $row["name"]. "<br>";
        //             // You can output other fields as needed
        //         }
        //     } else {
        //         echo "No pet listings found";
        //     }

        //     // Close the database connection
        //     mysqli_close($this->connection);
        // }



        //     // Close the database connection
        //     mysqli_close($this->connection);

        //     return $petData;
    
}
?>