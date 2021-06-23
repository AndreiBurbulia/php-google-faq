<?php
//importo il file che contiene tutte le domande e le relative risposte
include 'server.php';

$questions; //array dal file server contenente le domande e le risposte
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
section{
    display: flex;
    flex-direction: column;
    max-width: 1200px;
    margin: auto;
}
</style>
<body>

<h1>Google FAQ</h1>

<section>
<?php foreach ($questions as $value) { ?>
<div class="box" >
    <h2><?php echo $value['domanda'] ?></h2>
    <p><?php echo $value['risposta'] ?></p>
</div  >
<?php } ?>
</section>
    
</body>
</html>