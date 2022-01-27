<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="list.php">Articls</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <?php
            // $file = fopen('db.txt', 'r');
            // while($line = fgets($file)){
            //     $article = explode('|', $line);
            //     // echo '<h2>'.$article[0].'</h2>';
            //     // echo '<p>'.$article[1].'</p>';

            // $file = fopen('db.txt', 'r');
            // $line = fgets($file);
            // while(!feof($file)){
            //     $article = explode('|', $line);
            //     $line = fgets($file);
            //     // echo '<h2>'.$article[0].'</h2>';
            //     // echo '<p>'.$article[1].'</p>';
            $file = fopen('db.txt', 'r');
            $i = 1;
            while($article = fgetcsv($file, 0, '|')){
                // var_dump($article);
                // $article = explode('|', $line);
                 //echo '<h2>'.$article[0].'</h2>';
                // echo '<p>'.$article[1].'</p>';
                if(count($article) == 4){
            ?>

            <h3> <?= $article[0] ?> <?= $article[1] ?> </h3>
            <p> <?= $article[2] ?> </p>

            <a class="btn btn-danger" href="delete.php?line=<?= $i ?>">DELETE</a>
            <a class="btn btn-success" href="#">show</a>

            <hr>
        <?php
                }
            $i++;
            }
            fclose($file);
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>