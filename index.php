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
        //Get
        $getname = $_GET['name'];
        $getmail = $_GET['mail'];
        $getage = $_GET['age'];

        //Condizione if
        if(empty($getmail))
       {
           echo 'errore';
       }
       else {
           if (strpos($getmail, '@') !== false && strpos($getmail, '.') !== false)
           {
               echo 'Accesso riuscito';
           }
           else {
                echo 'Accesso negato';
           }
       }


    ?>

    
</body>
</html>

<!-- index.php?mail=elon.musk@gmail.com -->