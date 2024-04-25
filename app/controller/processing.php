<?php require(ROOT .'app/model/Base.php'); ?>
<?php require(ROOT .'app/model/Pet.php'); ?>

<?php

$Pet = new Pet();
if(isset($_GET['deletepetid'])){
    $result = $Pet->delete_pet($_GET['deletepetid']);

    if($result == 1){
        header("Location: /petmarket/userprofile");
    } else {
        header("Location: /petmarket/home");
    }
}
else{
    header("Location: /petmarket/home");
}


?>