<?php
// risolve waring : undefined array key
// $selectOption = array_key_exists( 'parking' , $_GET ) ? $_GET['parking'] : '' ;
// $selectVote = array_key_exists( 'vote' , $_GET ) ? $_GET['vote'] : '' ;


//alternativa alla risoluzione del warning
$default = [
    'parking' => '',
    'vote' => '',
];

$_GET = array_replace($default, $_GET);

$selectOption = $_GET['parking'];
$selectVote = $_GET['vote'];
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
        <h1 class="col-12 text-center">Hotels</h1>
        <div class="col-12">
            <form method="GET">

                <select name="parking" style="background-color: black; color: greenyellow">
                    <option value="showAll" selected>Mostra Tutti</option>
                    <option value="0">Assente</option>
                    <option value="1">Presente</option>
                </select>

                <input type="number" min="0" max="5" name="vote" value="0" style="background-color: black; color: greenyellow">

                <button type="submit" style="background-color: black; color: greenyellow">Invia</button>

            </form>
        </div>
    </section>
    <section class="d-flex container justify-content-start flex-wrap">

        <?php

        foreach ($hotels as $hotel) {
            if ($selectOption == "showAll" && $hotel["vote"] >= $selectVote)
                echo "<ul class='col-2'>" .
                    $hotel["name"] .
                    "<li>" . " Description: " . $hotel["description"] . "</li>" .
                    "<li>" . " Parking: " . $hotel["parking"] . "</li>" .
                    "<li>" . " Vote: " . $hotel["vote"] .  "</li>" .
                    "<li>" . " Distance To Center: " . $hotel["distance_to_center"] .  "</li>" .
                    "</ul>";
            elseif ($hotel["parking"] == false && $selectOption == 0 && $hotel["vote"] >= $selectVote)
                echo "<ul class='col-2'>" .
                    $hotel["name"] .
                    "<li>" . " Description: " . $hotel["description"] . "</li>" .
                    "<li>" . " Parking: " . $hotel["parking"] . "</li>" .
                    "<li>" . " Vote: " . $hotel["vote"] .  "</li>" .
                    "<li>" . " Distance To Center: " . $hotel["distance_to_center"] .  "</li>" .
                    "</ul>";
            elseif ($hotel["parking"] == true && $selectOption == 1 && $hotel["vote"] >= $selectVote)
                echo "<ul class='col-2'>" .
                    $hotel["name"] .
                    "<li>" . " Description: " . $hotel["description"] . "</li>" .
                    "<li>" . " Parking: " . $hotel["parking"] . "</li>" .
                    "<li>" . " Vote: " . $hotel["vote"] .  "</li>" .
                    "<li>" . " Distance To Center: " . $hotel["distance_to_center"] .  "</li>" .
                    "</ul>";
            else echo "";
        }
        ?>
    </section>

</body>

</html>