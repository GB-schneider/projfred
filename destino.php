<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    #text {
        
        font-size: 100px;
    }

    #image {
        padding: 15px;
        border-radius: 25px;
    }

    body {
        color: #fff;
        background-image: url('img/gripenBack.jpg');
    }

    #button {
        border: 1px solid #fff;
        text-align: center;
        justify-content: center;
        color: white;
        font-size: 20px;
    }
    #button:hover{
        background-color: rgba(200, 224, 248, 0.2);
    }
</style>

<body>
    <?php

    //array contendo as imagens

    $imagens = [
        "img/image1.jpg",
        "img/image2.jpg",
        "img/image3.jpg",
        "img/image4.jpg",
        "img/image5.jpg",
        "img/image6.jpg",
    ];


    //conta quantos valores a no array
    $countArray = count($imagens);

    ?>

    <div style="background-color: rgba(62, 87, 112, 0.8); border-radius: 20px;text-align: center;" class="container p-5 mt-5 text-center">

        <?php

        //if = button - funções de cada butão    
        if (isset($_POST['exibir'])) {


            for ($i = 0; $i < $countArray; $i++) {

                $numImage = $imagens[$i];

                echo "<img id='image' src='$numImage' width='400px' height='250px'>";
            }
        }
        if (isset($_POST['excluir'])) {

            $deleteImage = array_pop($imagens);

            for ($i = 0; $i < $countArray - 1; $i++) {

                $numImage = $imagens[$i];

                echo "<img id='image' src='$numImage' width='400px' height='250px'>";
            }
        }
        if (isset($_POST['contar'])) {

            for ($i = 0; $i < $countArray; $i++) {

                $numImage = $imagens[$i];


                echo "<img id='image' src='$numImage' width='400px' height='250px'>";
            }
            $num = count($imagens);
            echo '<p>Quantidade de aviões dentro do Array:</p>';
            echo "<h1 id='text'>$num</h1>";
        }
        if (isset($_POST['revert'])) {

            for ($i = 0; $i < $countArray; $i++) {

                $array_invertido = array_reverse($imagens, false);
                $numImage = $array_invertido[$i];



                echo "<img id='image' src='$numImage' width='400px' height='250px'>";
            }
            $num = count($imagens);
        }
        if (isset($_POST['aleatori'])) {

            for ($i = 0; $i < $countArray; $i++) {

                shuffle($imagens);
                $numImage = $imagens[$i];

                echo "<img id='image' src='$numImage' width='400px' height='250px'>";
            }
        }
        if (isset($_POST['sair'])) {
            header('Location: index.php');
            exit;
        }

        ?>
        <form method="POST">
            <button class="btn mb-3 mx-2" id="button" type="submit" name="exibir">EXIBIR</button>
            <button class="btn mb-3 mx-2" id="button" type="submit" name="contar">CONTAR</button>
            <button class="btn mb-3 mx-2" id="button" type="submit" name="revert">INVERTER</button>
            <button class="btn mb-3 mx-2" id="button" type="submit" name="aleatori">ALEATORIZAR</button>
            <button class="btn mb-3 mx-2" id="button" type="submit" name="excluir">EXCLUIR</button>
            <button class="btn mb-3 mx-2" id="button" type="submit" name="sair">SAIR</button>

        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>