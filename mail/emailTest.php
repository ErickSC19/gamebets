<?php
include "class.email.php";

$obj = new Email();

$message = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto odit modi id delectus, culpa harum quidem eveniet. Expedita sequi, autem ipsa recusandae cumque animi perferendis dolor, assumenda error eos tempora.";
$obj->sendEmail("panfilogr2014@gmail.com", "Mr.", "Test", $message);
?>

