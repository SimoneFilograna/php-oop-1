<?php
    require_once __DIR__."/Models/Movie.php";
    include_once __DIR__."/db/movieList.php";


    $movie1 = new Movie("Il Padrino", 1972);
    $movie2 = new Movie("Forrest Gump", 1994);

    $newMovie = array_map(function($item){
        $movie = new Movie($item["titolo"], $item["anno"]);
        $movie-> description = $item["descrizione"];
        $movie-> category = $item["genere"];
        $movie-> img = $item["img"];

        return $movie;
    }, $movieList);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="container text-center mt-5">
            <h1 class="display-1 fw-semibold">FILM</h1>
        </div>
    </header>
    <main class="pb-5 mt-5">
        <div class="container">
            <div class="row row-cols-3 g-5">
                <?php 
                foreach($newMovie as $singleMov) { ?>

                <div class="col">
                    <div class="card text-center h-100 rounded-5">
                        <img src="<?php echo $singleMov->img ?>" class="card-img-top rounded-4" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $singleMov->fullTitle() ?></h4>
                            <p class="card-text mt-3"><?php echo $singleMov->description ?></p>
                            <p class="card-text fw-bold mt-5"><?php echo $singleMov->category?></p>
    
                        </div>
                    </div>                   
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>