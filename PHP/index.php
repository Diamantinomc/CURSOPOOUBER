<?php
    require_once("car.php");
    require_once("uberX.php");
    require_once("account.php");
    require_once("uberPool.php");
    require_once("uberVan.php");

    $uberX = new uberX("GHDT35 ", new account("Adan Marchena ", "18195756-9 "), "chevrolet ", "Spark");
    $uberX->printDataCar();

    $uberPool = new uberPool("UUYH87 ", new account("Ema Martinez ", "6111016-k "), "Corsa ", "Swing");
    $uberPool->printDataCar();

    $uberVan = new uberVan("KJIL63 ", new account("Marianela Romero ", "8384044-7 "),"Nissan ", "Versa");
    $uberVan->setPassenger(6);
    $uberVan->printDataCar();
?>