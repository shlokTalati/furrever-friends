<?php
require(ROOT . "app/config/Database.php");
class Info extends Database
{

    public function get_faq(){
        $sql = "SELECT * FROM faq";

        // Execute the query
        $result = mysqli_query($this->connection, $sql);

        // Check if any rows were returned
        $faq = array();
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $faq[] = $row;
            }
            return $faq;
        }
    }
}