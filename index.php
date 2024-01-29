<?php
    // Includi il file delle funzioni che contiene la funzione pswGen
    include __DIR__.'/partials/function.php';

    // Verifica se il parametro 'psw_leng' è impostato nella query string e non è vuoto
    if (isset($_GET['psw_leng']) && $_GET['psw_leng'] != '') {
        // Questo blocco viene eseguito solo se il parametro 'psw_leng' è presente e non è vuoto
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="m-4 ">
        <!-- Form per inserire la lunghezza della password -->
        <form action="./index.php" method="get">
            <input type="text" name="psw_leng" id="pswLeng" placeholder="Lunghezza Password">
            <button type="submit">Genera</button>
        </form>

        <?php 
            // Verifica se il parametro 'psw_leng' è presente e non è vuoto
            if (isset($_GET['psw_leng']) && $_GET['psw_leng'] != '') { ?>            
                <!-- Visualizza la password generata solo se la lunghezza è maggiore o uguale a 4 -->
                <h4><?php echo $_GET['psw_leng'] >= 4 ? pswGen($_GET['psw_leng']) : "Inserisci un numero maggiore di 4"?></h4>
        <?php }?>
    </div>
</body>
</html>
