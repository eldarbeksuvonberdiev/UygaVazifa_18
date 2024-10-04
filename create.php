<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container mt-5">
            <h1>Create Product</h1>
            <a href="index.php" class="btn btn-primary mt-2">Products</a>
            <div class="mb-3 mt-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="mb-3 mt-4">
                <label for="tel" class="form-label">Telefon</label>
                <input type="text" name="tel" class="form-control" id="tel" placeholder="Telefon raqami">
            </div>
            <div class="mb-3 mt-4">
                <label for="manzil" class="form-label">Manzil</label>
                <input type="text" name="manzil" class="form-control" id="manzil" placeholder="Manzil">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Rasm</label>
                <input type="file" name="rasm" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="info" class="form-label">Info</label>
                <textarea name="info" id="info" style="width: 100%;border-radius:10px;padding: 10px 10px 5px 10px" placeholder="Info"></textarea>
            </div>
            <button name="add" type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    <?php
    include "Talabalar.php";

    if (isset($_POST['add']) && !empty($_POST['name']) && !empty($_POST['tel']) && !empty($_POST['manzil']) && !empty($_POST['info'])) {
        $name = htmlspecialchars(strip_tags($_POST['name']));
        $tel = htmlspecialchars(strip_tags($_POST['tel']));
        $manzil = htmlspecialchars(strip_tags($_POST['manzil']));
        $info = htmlspecialchars(strip_tags($_POST['info']));
        $rasm = explode('.',$_FILES['rasm']['name']);
        $rasmP = 'images/'.date("y-m-d_h-i-s.") . end($rasm);
        move_uploaded_file($_FILES['rasm']["tmp_name"],$rasmP);

        $data = [
            "fio" => $name,
            "tel" => $tel,
            "manzil" => $manzil,
            "info" => $info,
            "img" => $rasmP
        ];
        // print_r($data);
        if(Talabalar::create($data)){
            header("location:index.php");
        }else{
            echo "Error";
        }
    }elseif(isset($_POST['add']) && empty($_POST['name']) && empty($_POST['tel']) && empty($_POST['manzil']) && empty($_POST['info'])){
        echo "Barcha maydonlar to'ldirilishi kerak!";
    }

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>