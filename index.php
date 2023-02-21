<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];   

    $parkingFilter = null;
    if(isset($_GET["parking"])){
        $parkingFilter = $_GET["parking"];
    }

    $votoFilter = 0;
    if(isset($_GET["voto"])){
        $votoFilter = $_GET["voto"];
    }
    echo $parkingFilter;

    $filter = [];
    foreach($hotels as $hotel){
        if ($parkingFilter == ""||
        ($parkingFilter == "1" && $hotel["parking"] == true) ||
        ($parkingFilter == "0" && $hotel["parking"] == false)
    ){
        $filter[] = $hotel;
    }
    }
    $addHotels =false;
    if($hotel["vote"] < $votoFilter ){
        $addHotels = false;
    }
    if($addHotels == true){
        $filter[] = $hotel;
    }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="GET">
                <div class="mb-3">
                    <label  for="parking-input" class="form-label">parcheggio disponibile</label>
                    <select name="parking" id="parking-input" class="form-select"  aria-label="Default select example">
                        <option value="" selected>indifferente</option>
                        <option value="1">yes</option>
                        <option value="0">now</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label  for="voto-input" class="form-label">voto</label>
                    <select name="voto" id="voto-input" class="form-select"  aria-label="Default select example">
                        <option value="" selected>indifferente</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">filtra</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <h1 class="text-center">PHP Hotel</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <?php 
                        if(isset($table)){
                foreach($table as $numberTable){
                    echo '<th scope="row">' .$numberTable ."</th>";
                }
            }
            ?>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($filter as $index => $hotel){ ?>
                <tr>
                    <th scope="row"><?php echo $index ?></th>
                    <td><?php echo $hotel["name"] ?></td>
                    <td><?php echo $hotel["description"] ?></td>
                    <td><?php echo $hotel["parking"] ? "yes" : "now" ?></td>
                    <td><?php echo $hotel["vote"] ?></td>
                    <td><?php echo $hotel["distance_to_center"] ?> km</td>
                </tr>
            <?php 
            }
            ?>
                </div>
            </tbody>
            </table>
            </div>
        </div>

</body>
</html>


 
