<?php
include "Orang.php";

?>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=hai, initial-scale=1.0">
    <title>Document</title>
</head>
</body>
    </h1>Hello Praktikum 2
    <div>

      <?php
    //proses instansiasi
    $mahasiswa = new Orang ('farhan');  

    //mengakses property
    $mahasiswa->setNama ('farhan');
    $mahasiswa->setTgllahir ('2006-01-21');
    $mahasiswa->setAlamat('Sungai Duren, Muaro Jambi');

    echo "<br>";
    echo "Data Mahasiswa". $mahasiswa->getNama(). "<br>";
    echo "Nama". $mahasiswa->getNama(). "<br>";
    echo "Tgl Lahir". $mahasiswa->getTgllahir(). "<br>";
    echo "Alamat". $mahasiswa->getAlamat(). "<br>";

    //memanggil method
    $mahasiswa->ucapkanSalam();

    echo "<Br>";

    $mahasiswa2 = new Orang('alan');


    $mahasiswa2->ucapkanSalam();

    ?>
</body>
</html>