<?php
include_once "Prosesorlaptop.php";
include_once "Laptopprosesorproxy.php";
include_once "Reallaptop.php";

// Membuat instance dari proxy dengan data prosesor
$proxyProcessor = new LaptopProcessorProxy("Intel", "i7-10750H", 2.6);
$proxyProcessor2 = new LaptopProcessorProxy("Amd", "Ryzen-5600H", 3.0);
$proxyProcessor3 = new LaptopProcessorProxy("snapdragon", "750" , 2.6);

// Mendapatkan spesifikasi prosesor melalui proxy
echo $proxyProcessor->getSpecifications();
echo "<br>";
echo $proxyProcessor2->getSpecifications();
echo "<br>";
echo $proxyProcessor3->getSpecifications();
echo "<br>";
var_dump($proxyProcessor);
echo "<br>";
echo "<br>";
var_dump($proxyProcessor2);
echo "<br>";
echo "<br>";
var_dump($proxyProcessor3);
?>
