<?php 
    $kelompok = array(
        array("Nama" => "Amanda Farliana Setyasari", "NIM" => 499877),
        array("Nama" => "Jamaluddin", "NIM" => 499879),
        array("Nama" => "Remomini Haruka", "NIM" => 499870),
        array("Nama" => "Gutaro Hariyadin", "NIM" => 499872),
        array("Nama" => "Nikita Yanto", "NIM" => 499875),
    );

    foreach($kelompok as $anggota){
        $nama = $anggota["Nama"];
        $nim = $anggota["NIM"];

        if($nim % 2 == 0){
            $peran = "Back-End Developer";
        } else {
            $peran = "Front-End Developer";
        }

        echo "Nama : " . $nama . "<br>";
        echo "NIM : " . $nim . "<br>";
        echo "Peran : " . $peran . "<br>";
        echo "<br>";
    }

?>