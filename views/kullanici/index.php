<?php
session_start();
require '../../init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OOP-MVC Uygulama</title>
    <link href="../../libs/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../libs/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
            <?php
            $k=new User();
            $uc=new UserController();
            $r=array();
            $r=$uc->tumBilgiGetir();
            $k->setkID($r[0]);
            $k->setkKadi($r[1]);
            $k->setkAdi($r[2]);
            $k->setkSoyadi($r[3]);
            $k->setkSifre($r[4]);
            $k->setkEposta($r[5]);
            $k->setkayitTarih($r[6]);
            echo "id: ".$k->getkID()."<br>";
            echo "kadi: ".$k->getkKadi()."<br>";
            echo "adi: ".$k->getkAdi()."<br>";
            echo "soyadi: ".$k->getkSoyadi()."<br>";
            echo "sifre: ".$k->getkSifre()."<br>";
            echo "eposta: ".$k->getkEposta()."<br>";
            echo "tarih: ".$k->getkayitTarih()."<br>";
            ?>
         </div>
    </div>
</div>

</html>