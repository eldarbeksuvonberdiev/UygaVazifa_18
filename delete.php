<?php
include "Talabalar.php";

if(isset($_GET['id'])){
    if(gettype((int)$_GET['id']) == "integer"){
        $id = $_GET['id'];
        Talabalar::delete($id);
        header("Location: index.php");
    }
}



?>