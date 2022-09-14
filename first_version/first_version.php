<?php
     // include database
    include __DIR__. '/../database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- Bootstrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom style -->
    <link rel="stylesheet" href="../style.css">
    <title>php-ajax-dischi</title>

</head>
<body>

    <!-- Header -->
    <header>
    <img class="logo" src="../logo-spotify.png" alt="spotify-logo">
    </header>

    <!-- Main -->
    <main class="py-5">
        <div class="container">
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2  ">
                <?php
                    foreach($database as $discs){
                        echo "<div class='col'> ";
                            echo "<div class='my_card mb-5 p-2'>";
                                echo "<img src='" . $discs['poster'] . "' alt='img' class='img-fluid mb-4'>";
                                echo "<div class='d-flex flex-column text-center'> ";
                                    echo "<h1 class='text-white text-uppercase d-block mb-4'>" . $discs['title'] . "</h1>";
                                    echo "<span class='text-secondary my_span'>" . $discs['author'] . "</span>";
                                    echo "<span class='text-secondary my_span'>" . $discs['year'] . "</span>";
                                echo "</div>";
                            echo "</div>";     
                        echo "</div>";
                    }
                ?>
            </div>
            </div>
        </div>
    </main>
</body>
</html>