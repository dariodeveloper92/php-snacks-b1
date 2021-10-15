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

<!-- snack 9B -->
<?php 
    
    require __DIR__ . "/database.php";
    
    $filteredHotels = [];
    if (isset($_GET['parking'])) {
       foreach($hotels as $hotel) {
           if($hotel['parking'] == $_GET['parking']) {
            array_push($filteredHotels, $hotel);    
           }
       } 
    }   
    else if (isset($_GET["stars"])) {
        foreach ($hotels as $hotel) {
            if($hotel['stars'] == $_GET['stars']) {
                array_push($filteredHotels, $hotel);    
            }
        } 
    }  
    else if(isset($_GET["center"])) {
        foreach ($hotels as $hotel) {
            if($hotel['center'] == $_GET['center']) {
                array_push($filteredHotels, $hotel);    
            }
        }
    }   
    else {
        $filteredHotels = $hotels;
    }
?>