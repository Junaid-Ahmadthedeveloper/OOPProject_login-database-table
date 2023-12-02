<?php 
include('./data.php');
if(isset($_GET["delid"]))
{
$id = $_GET['delid'];

$crudobj->delete("user_tbl",$id);

header('location:./table.php');
}


?>