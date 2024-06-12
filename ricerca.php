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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3.4.27/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>#####</title>
</head>

<body class="myBg">

    <section class="d-flex container justify-content-between flex-wrap">

        <?php
        $selectOption = $_GET['parking'];
        foreach ($hotels as $hotel) {
            if ($hotel["parking"] == false && $selectOption == 0)
                echo "<ul class='col-2'>" .
                    $hotel["name"] .
                    "<li>" . " Description: " . $hotel["description"] . "</li>" .
                    "<li>" . " Parking: " . $hotel["parking"] . "</li>" .
                    "<li>" . " Vote: " . $hotel["vote"] .  "</li>" .
                    "<li>" . " Distance To Center: " . $hotel["distance_to_center"] .  "</li>" .
                    "</ul>";
            elseif ($hotel["parking"] == true && $selectOption == 1)
                echo "<ul class='col-2'>" .
                    $hotel["name"] .
                    "<li>" . " Description: " . $hotel["description"] . "</li>" .
                    "<li>" . " Parking: " . $hotel["parking"] . "</li>" .
                    "<li>" . " Vote: " . $hotel["vote"] .  "</li>" .
                    "<li>" . " Distance To Center: " . $hotel["distance_to_center"] .  "</li>" .
                    "</ul>";
            elseif ($selectOption == "showAll")
                echo "<ul class='col-2'>" .
                    $hotel["name"] .
                    "<li>" . " Description: " . $hotel["description"] . "</li>" .
                    "<li>" . " Parking: " . $hotel["parking"] . "</li>" .
                    "<li>" . " Vote: " . $hotel["vote"] .  "</li>" .
                    "<li>" . " Distance To Center: " . $hotel["distance_to_center"] .  "</li>" .
                    "</ul>";
        }

        ?>


    </section>


</body>

</html>