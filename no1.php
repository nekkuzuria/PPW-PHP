<?php 
    $nama = "amanda";
    $pjgNama = strlen($nama);

    if($pjgNama == date("d") - 2){
        echo "berhasil";
    } else if($pjgNama < date("d")){
        echo "sedikit lagi";
    } else {
        echo "coba lagi";
    }


?>