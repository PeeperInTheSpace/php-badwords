<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP page</title>
</head>

    <body>

        <?php 
    
            $testo = "Con le mani, con le mani, con le mani
            ciao ciao!
            Con i piedi, con i piedi, con i piedi
            ciao ciao!
            E con la testa, con il petto, con il cuore
            ciao ciao!";
    
            $badWord = $_GET['censored'];
    
            $testoCensurato = str_replace($badWord, '*****', $testo);

        ?>
    
        <h1 class="text" id="title">Il testo da censurare è:</h1>
        <h2 class="text" id="subtitle">
            <?php echo $testo ?>
        </h2>
        
        <h1 class="text" id="title">Il testo è formato da:</h1>
        <h3 class="text" id="subtitle">
            <?php echo strlen($testo) ?>
            caratteri
        </h3>

        <h1 class="text" id="title">Badword: </h1>
        <h3 class="text" id="subtitle"><?php echo $badWord ?></h3>

        <h1 class="text" id="title">Il testo censurato è: </h1>
        <h2 class="text" id="subtitle">
            <?php echo $testoCensurato ?>
        </h2>

    </body>

    <style>

        .text {
            display: flex;
            justify-content: center;
            margin: 0 auto;
            width: 500px;
            line-height: 50px;
            font-family: sans-serif;
        }

        #title {
            color: grey;
            margin-bottom: 30px;
        }

        #subtitle {
            color: white;
            background-color: #00b982;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
        }

    </style>

</html>