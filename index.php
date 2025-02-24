<?php

// $data = file_get_contents("./assets/Music.json");
// $json = json_decode($data, true);

// var_dump($json);

function getMusicTitle(): string
{
    $myCards = "";
    $data = file_get_contents("./assets/Music.json");
    $json = json_decode($data, true);
    foreach ($json as $value) {

        $myCards .= "<div class='card col-10 col-lg-3 shadow-lg p-3 mb-5 rounded bg-black text-light '>
                        <img src='https://img1.picmix.com/output/stamp/normal/6/5/9/5/945956_d2f50.gif' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h1 class='card-title fs-4'>" . $value["tit_titre"] . "</h1>
                            <p class='card-text'>" . $value["tit_chanteur"] . "</p>
                            <p class='card-text position-absolute bottom-0 end-0 p-3'>" . $value["genre(s)"] . "</p>
                        </div>
                    </div>";
    }
    return $myCards;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body class="bg-dark">

    <h1 class="text-center text-light">Music-Mix</h1>
    <div class="row gap-3 mt-3 mx-0 justify-content-center holographic">
        <?= getMusicTitle() ?>
    </div>

</body>

</html>