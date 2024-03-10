<?php require(ROOT . 'app/model/Info.php'); ?>

<?php
$Info = new Info();

$faq = $Info->get_faq();

?>


<?php require(ROOT .'app/controller/base.php'); ?>