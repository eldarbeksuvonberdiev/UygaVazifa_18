<?php
include "Talabalar.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $talaba = Talabalar::show($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>View</h1>
    <h1>Ismi:<?=$talaba->fio?></h1>
    <h2>Telefon raqami: <?=$talaba->tel?></h2>
    <h3>Manzili: <?=$talaba->manzil?></h3>
    <h4>Rasmi: <img src="<?=$talaba->img?>" width="30%" alt=""></h4>
    <h5>Ma'lumot: <?=$talaba->info?></h5>
</body>
</html>