<!-- snack 7 -->
<?php 
    function media($array) {
        $nVoti = count($array);
        $somma = 0;
        foreach($array as $voto) {
            $somma += $voto;
        }
        return $somma/$nVoti;
    }

    media('voti');
?>