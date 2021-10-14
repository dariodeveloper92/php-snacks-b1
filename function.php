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

<!-- snack 8 -->
<?php 
    $visibility = [];
    foreach($ads as $ad) {
        if($ad['is_active']) {
            $visibility[] = $ad;
        }
    }

    $currentActive = $visibility[rand(0, count($visibility) -1)];
?>