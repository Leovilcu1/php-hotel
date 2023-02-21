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


foreach($hotels as $numb => $hotel){
        echo "<hr>";
        echo $numb ;
        foreach($hotel as $key => $dati){
                echo "$key : $dati";
                echo "<br>";
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <table class="table">
        <thead>
        
        
            <tr>
            <th scope="col">#</th>
            <?php foreach($hotel as $key => $dati){?>
                <th scope="col"><?php echo $key ?></th>
                <?php } ?>
                
            </tr>
        </thead>
        <tbody>
        <?php foreach($hotels as $numb => $hotel){?>

                <tr>
                        <th scope="row"><?php echo $numb ?></th>
                        <td><?php echo $hotel["name"] ?></td>
                        <td><?php echo $hotel["description"] ?></td>
                        <td><?php echo $hotel["parking"] ? "yes" : "now" ?></td>
                        <td><?php echo $hotel["vote"] ?></td>
                        <td><?php echo $hotel["distance_to_center"] ?> km</td>
                </tr>
        <?php } ?>
        
  </tbody>
    </table>
</body>
</html>