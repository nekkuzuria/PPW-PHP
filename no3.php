<?php 
    $listHurufNama = array("a", "m", "n", "d");
    $listKota = array("Lampung", "Riau", "Jambi", "Bengkulu", "Makassar", 
                "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");

    $state = false;
    foreach($listHurufNama as $nama){
        foreach($listKota as $kota){
            
            if(strtolower($nama)==strtolower($kota[0])){
                $kkn = $kota;
                $state = true;
                break;
            }

        }

        if($state) {
            break;
        }
    }

    if(!$state){
        echo "Anda ditugaskan di " . "Jawa Timur";
    } else {
        echo "Anda ditugaskan di " . $kkn;
    }

?>
