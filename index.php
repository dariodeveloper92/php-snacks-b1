<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>
<body>
    
    <h1> Snack 1</h1>
    <h4>Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario:</h4>
    <!-- Risultato: Olimpia Milano - Cantù | 55-60 -->

    <?php 
        $partite = [
            [
                'squadraCasa' => ' Olimpia Milano',
                'sqaudraOspite' => 'Cantù',
                'puntiCasa' => 55,
                'puntiOspite' => 60
            ],
            [
                'squadraCasa' => ' Roma',
                'sqaudraOspite' => 'Milano',
                'puntiCasa' => 60,
                'puntiOspite' => 70
            ],
            [
                'squadraCasa' => ' Genova',
                'sqaudraOspite' => 'Torino',
                'puntiCasa' => 50,
                'puntiOspite' => 65
            ],
            [
                'squadraCasa' => '  Firenze',
                'sqaudraOspite' => 'Venezia',
                'puntiCasa' => 65,
                'puntiOspite' => 50
            ],
            [
                'squadraCasa' => ' Palermo',
                'sqaudraOspite' => 'Bologna',
                'puntiCasa' => 65,
                'puntiOspite' => 70
            ],
            [
                'squadraCasa' => ' Bari',
                'sqaudraOspite' => 'Napoli',
                'puntiCasa' => 50,
                'puntiOspite' => 65
            ],
        ];

        //ciclo for
        for($i = 0; $i < count($partite); $i++ ) {
            echo '<li>' . $partite[$i]['squadraCasa'] . ' - ' . $partite[$i]['sqaudraOspite'] . ' | ' . $partite[$i]['puntiCasa'] . '-' . $partite[$i]['puntiOspite'] . '</li>' . '<br/>';
        }
    ?>

    <h1> Snack 2</h1>
    <h4>Passare come parametri GET name, mail e age: </h4>

    <?php 
        $mails = [
            [
                'name' => 'Mark',
                'mail' => 'mark.zuckerberg@gmail.com',
                'age' => 37,
            ],
            [
                'name' => 'Elon ',
                'mail' => 'elon.musk@gmail.com',
                'age' => 50,
            ],
            [
                'name' => 'Jeff',
                'mail' => 'jeff.bezos@gmail.com',
                'age' => 57,
            ],
        ];

        //ciclo for
        for($i = 0; $i < count($mails); $i++ ) {
            echo '<li>' . $mails[$i]['name'] . ' - ' . $mails[$i]['mail'] . ' - ' . $mails[$i]['age'] . '</li>' . '<br/>';
        }

        //Get
        $getname = $_GET['name'];
        $getmail = $_GET['mail'];
        $getage = $_GET['age'];

        //stampo array
        var_dump($mails);

        

    ?>

    <!-- stampo array in h4 -->
    <!-- <h4>//<?php var_dump($mails)?></h4> -->
</body>
</html>