<?php 

require(ROOT . "app/config/Database.php");

class Base extends Database{


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

    public function getNotificationCount(){
        $sql = "SELECT id FROM adoption WHERE owner_id = '{$_SESSION['user']['email']}' AND status = 'pending'";

        // Execute the query
        $result = mysqli_query($this->connection, $sql);

        // Check if any rows were returned
        $data = array();
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return count($data);
        }
        else{
            return 0;
        }
    }


    
}