<!--  Snack 10 ------------------------------------------>
<?php 

    $invitati = ['Carlo', 'Paolo', 'Marco'];

    $nome_inserito = $_GET['name'];

    echo "Nome: inserito: " .$nome_inserito;

    if(in_array($nome_inserito, $invitati)) {
        echo "<h1 style='color: green'> OK </h1>";
    } else {
        echo "<h1 style='color: red'> NO </h1>";
    }

?>