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
header {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid #0000005e;
}

header>div {
    display: flex;
    align-items: center;
}

header>div>img {
    height: 60px;
}

header>ul {
    display: flex;
}

header>ul>li {
    list-style: none;
    margin: 0px 2rem;
}

header>ul>li>a {
    text-decoration: none;
    color: #494949;
    font-weight: bold;
}

section {
    display: flex;
    flex-direction: column;
    max-width: 1200px;
    margin: auto;
}
</style>

<body>

    <header>
        <div>
            <img src="https://loghi-famosi.com/wp-content/uploads/2020/09/Google-Logo.png" alt="Google logo">
            <span>Privacy e termini</span>
        </div>
        <ul>
            <li><a href="#">Introduzione</a></li>
            <li><a href="#">Norme sulla privacy</a></li>
            <li><a href="#">Termini di servizio</a></li>
            <li><a href="#">Tecnologie</a></li>
            <li><a href="#">Domande frequenti</a></li>
        </ul>
    </header>

    <section>
        <?php foreach ($questions as $value) { ?>
        <div class="box">
            <h2><?php echo $value['domanda'] ?></h2>
            <p><?php echo $value['risposta'] ?></p>
        </div>
        <?php } ?>
    </section>

</body>

</html>