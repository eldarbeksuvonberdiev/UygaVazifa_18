<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="container mt-5">
        <h1>Talabalar</h1>
        <a href="create.php" class="btn btn-primary mt-2">Create</a>
        <table class="table table-striped bg-success mt-4" border="1"> 
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Manzil</th>
                    <th scope="col">Image</th>
                    <th scope="col">Info</th>
                    <th scope="col">View</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "Talabalar.php";
    
                $talabalar = Talabalar::all();
                foreach ($talabalar as $talaba) { ?>
                    <tr>
                        <th scope="row"><?=$talaba->id ?></th>
                        <td><?= $talaba->fio ?></td>
                        <td><?=$talaba->tel ?></td>
                        <td><?=$talaba->manzil ?></td>
                        <td><img src="<?=$talaba->img ?>" width="100" alt=""></td>
                        <td><?=substr($talaba->info,0,50)?></td>
                        <td><a type="submit" class="btn btn-primary" href="view.php?id=<?=$talaba->id?>">View</a></td>
                        <td><a type="submit" class="btn btn-primary" href="update.php?id=<?=$talaba->id?>">Update</a></td>
                        <td><a type="submit" class="btn btn-danger" href="delete.php?id=<?=$talaba->id?>">Delete</a></td>
                    </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>