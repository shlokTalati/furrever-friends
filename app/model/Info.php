<?php
require(ROOT . "app/model/Base.php");
class Info extends Base
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