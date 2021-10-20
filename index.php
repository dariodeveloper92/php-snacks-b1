<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Snacks blocco 1</title>
</head>
<body>
    <!-- SNACK 1 ------------------------------------------------------------------------------------->
    <h1> Snack 1</h1>
    <h4>Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario:</h4>
    <!-- Risultato: Olimpia Milano - Cantù | 55-60 -->

    <?php 
        $partite = [
            [
                'squadraCasa' => ' Olimpia Milano',
                'sqaudraOspite' => 'Cantù',
                'puntiCasa' => rand(50, 90),
                'puntiOspite' => rand(50, 90)
            ],
            [
                'squadraCasa' => ' Roma',
                'sqaudraOspite' => 'Milano',
                'puntiCasa' => rand(50, 90),
                'puntiOspite' => rand(50, 90)
            ],
            [
                'squadraCasa' => ' Genova',
                'sqaudraOspite' => 'Torino',
                'puntiCasa' => rand(50, 90),
                'puntiOspite' => rand(50, 90)
            ],
            [
                'squadraCasa' => '  Firenze',
                'sqaudraOspite' => 'Venezia',
                'puntiCasa' => rand(50, 90),
                'puntiOspite' => rand(50, 90)
            ],
            [
                'squadraCasa' => ' Palermo',
                'sqaudraOspite' => 'Bologna',
                'puntiCasa' => rand(50, 90),
                'puntiOspite' => rand(50, 90)
            ],
            [
                'squadraCasa' => ' Bari',
                'sqaudraOspite' => 'Napoli',
                'puntiCasa' => rand(50, 90),
                'puntiOspite' => rand(50, 90)
            ],
        ];

        //ciclo for
        for($i = 0; $i < count($partite); $i++ ) {
            echo '<li>' . $partite[$i]['squadraCasa'] . ' - ' . $partite[$i]['sqaudraOspite'] . ' | ' . $partite[$i]['puntiCasa'] . '-' . $partite[$i]['puntiOspite'] . '</li>' . '<br/>';
        }
    ?>

    <!-- SNACK 2 ------------------------------------------------------------------------------------->
    <h1> Snack 2</h1>
    <h4>Passare come parametri GET name, mail e age: </h4>

    <?php 
        //Get
        $getName = $_GET['name'];
        $getMail = $_GET['mail'];
        $getAge = $_GET['age'];

        //Condizione if
        if(empty($getMail))
       {
           echo 'errore';
       }
       else {
           if (strpos($getMail, '@') !== false && strpos($getMail, '.') !== false && strlen($getName) > 3 && is_numeric($getAge))
           {
               echo 'Accesso riuscito';
           }
           else {
                echo 'Accesso negato';
           }
       }


    ?>

    <!-- SNACK 3 ------------------------------------------------------------------------------------->
    <h1> Snack 3</h1>
    <h4>Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore
        un array di post associati a quella data. Stampare ogni data con i relativi post.   
    </h4>
    
    <?php 
        $posts = [
            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];

        foreach ($posts as $key => $value) {
            echo $key . '<br/>';
            foreach($value as $post) {
                echo '<ul><li>' .  'title:' . $post['title'] . '</li></ul>' . '<br/>';
                echo '<ul><li>' . 'author:' . $post['author'] . '</li></ul>' .  '<br/>';
                echo '<ul><li>' . 'text:' . $post['text'] . '</li></ul>' . '<br/>';
                echo '<hr>';
            }
            
            
        }
    ?>

    <!-- SNACK 4 ------------------------------------------------------------------------------------->
    <h1> Snack 4 </h1>
    <h4>Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà 
        contenere lo stesso numero più di una volta.  
    </h4>

    <?php 
        $randomNum = [];

        while (count($randomNum) < 15) { // while
            $randomNum[] = rand(1, 100); // numero casuale

            $newNum = rand(1,100);
            if(! in_array($newNum, $randomNum)) { //condizione: se nell'array è presente lo stesso numero
                $randomNum[] = $newNum; 
            }
        }

        echo '<pre>';
        '<li>' . var_dump($randomNum) . '</li>';
        echo '</pre>';
    ?>

    <!-- SNACK 5 ------------------------------------------------------------------------------------->
    <h1> Snack 5 </h1>
    <h4>Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e 
        suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    </h4>
    
    <?php 
        $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis 
        suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. 
        Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis 
        suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.'; 

        // explode
        $myArray = explode('.', $paragrafo);

        foreach($myArray as $key => $myArray) {
            if(! empty($myArray)) {
                echo 'paragrafo n°' . $key . ' : ' . $myArray . '<br/>';
            }
        }
    ?>

     <!-- SNACK 6 ------------------------------------------------------------------------------------->
     <h1> Snack 6 </h1>
    <h4>Utilizzare questo array: https://pastebin.com/CkX3680A. Includerlo in un file database.php... 
        Stampiamo poi il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
    </h4>


    <div class="gray">
        <?php 
        include __DIR__ . '/database.php';
            foreach($db['teachers'] as $key => $teacher) {
                echo '<h5>' . 'name: ' . $teacher['name'] . ':'  . '</h5>' . '<br/>';
                echo '<h5>' . 'lastname: ' . $teacher['lastname'] . ':'  . '</h5>' . '<br/>';
            }
           
         ?>
    </div>
    <div class="green">
        <?php 
        include __DIR__ . '/database.php';
            foreach($db['pms'] as $key => $pm) {
                echo '<h5>' . 'name: '  . $pm['name'] . ':' . '</h5>' . '<br/>';
                echo '<h5>' . 'lastname: ' . $pm['lastname'] . ':'  . '</h5>' . '<br/>';
            }
        ?>
    </div>

       <!-- SNACK 7 ------------------------------------------------------------------------------------->
       <h1> Snack 7 </h1>
    <h4>Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e 
        un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
    </h4>

    <?php 
    /* import database */
    //include __DIR__ . '/database.php';
    /* import function */
    include __DIR__ . '/function.php';

        foreach ($students as $alunno) {
            echo 'Alunno : ' . $alunno['name'] . ' ' . $alunno['lastname'] . ' ' . media($alunno['voti']) . '<br/>'; 
        }
    ?>

    <!-- SNACK 8 ------------------------------------------------------------------------------------->
    <h1> Snack 8 </h1>
    <h4>Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
        Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere 
        sorteggiate solo quelle is_active true.
    </h4>
    
    <div class="container-snack8">
        <a href="<?php echo $currentActive['link'] ?>">
            <img class="img_bunner" src="<?php echo $currentActive['image_path'] ?>">
        </a>

        <?php 
            /* import database */
            //include __DIR__ . '/database.php';
            /* import function */
            //include __DIR__ . '/function.php';
        ?>

    </div>
    
    <!-- SNACK 9A ------------------------------------------------------------------------------------->
    <h1> Snack 9A </h1>
    <h4>Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
        Stampare tutti i nostri hotel con tutti i dati disponibili.
        Avremo un file PHP con il nostro “database” e un file con tutta la logica.
    </h4>

    <?php 
    /* import database */
    //include __DIR__ . '/database.php';

        foreach ($hotels as $hotel) {
            echo $hotel['name'] . ' - ' . $hotel['description'] . ' - ' . $hotel['parking'] . ' - ' . $hotel['vote'] . ' - ' . $hotel['distance_to_center'] . '<br/>'; 
        }
    ?>
    
    <!-- SNACK 9B ------------------------------------------------------------------------------------->
    <h1> Snack 9B </h1>
    <h4>Attraverso un parametro GET da inserire direttamente nell’url (uno alla volta), filtrare gli hotel 
        che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro.
    </h4>

    <?php 
    /* import database */
    //include __DIR__ . '/database.php';
    /* import function */
    include_once __DIR__ . '/function.php';

        foreach ($filteredHotels as $hotel) {
            echo $hotel['name'] . '<br/>'; 
        }
    ?>

    <!-- SNACK 10 ------------------------------------------------------------------------------------->
    <h1> Snack 10 </h1>
    <h4>Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. Il form 
        avrà un input di testo in cui inserire il nome di un invitato. Inseriamo nell’altro file una 
        lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.
    </h4>

    <form action="server.php">
        <label for="name"> Name: </label>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit"> <!-- invia -->
    </form>  

</body>
</html>


<!--url: http://localhost/php-snacks-b1/index.php?mail=elon.musk@gmail.com&name=dario&age=29 -->