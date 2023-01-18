<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>

<body style="background-color: black">
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <?php
            $key = "038cc080e6164da5bd9149a5c8d00be7";
            $api = curl_init("https://api.rawg.io/api/platforms?key=" . $key);
            curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($api);
            curl_close($api);
            $json = json_decode($response);

            for ($i = 0; $i < 12; $i++) {
                $id = $json->results[$i]->id;
                $nome = $json->results[$i]->name;
                $image = $json->results[$i]->image_background;
                ?>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $image ?> class="card-img-top"style="height: 150px">
                        <center>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $nome ?></h5>
                            <a href="plataforma.php?id=<?php echo $id ?>" class="btn btn-primary">Acesse a Plataforma</a>
                        </div>
                        </center>
                    </div>
                    <br>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

</body>

</html>