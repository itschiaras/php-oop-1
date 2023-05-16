<?php 

include __DIR__.'/Models/Movie.php';
include __DIR__.'/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container d-flex justify-content-center gap-3 flex-wrap pt-5">
    <?php foreach ($movies as $movie) { ?>
        <div class="card" style="width: 16rem;">
          <?php echo $movie->getCoverImage(); ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title ?></h5>
                <p><?php echo $movie->original_title ?></p>
                <span>Voto: <?php echo $movie->vote ?></span> <br>
                <span>Genere: <?php echo $movie->genre ?></span>
            </div>
        </div>
    <?php } ?>
</div>

</body>
</html>