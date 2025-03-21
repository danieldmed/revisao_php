<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão PHP</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(#edafb8, #f7e1d7);
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', 'sans-serif';
            color:rgb(196, 84, 112);
        }

        .container {
            height: 200px;
            width: 650px;
            background-color:rgb(243, 240, 240);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            gap: 35px;
            box-shadow: 0px 10px 40px rgb(182, 92, 92);
        }

    </style>

</head>
<body>

    <div class="container">
        <h1>Revisão de PHP</h1>
        <p>Este é um projeto para revisar as aulas de PHP e preparar para a avaliação.</p>
    </div>

    <?php 
        include_once("Veiculo.php");
    
    ?>
</body>
</html>