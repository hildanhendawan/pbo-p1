<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

$produk = new Produk();

$produk->setKode("P0001");
$produk->setNama("Laptop");
$produk->setHarga(10000000);
$produk->setStok(5);



echo "Produk: ".$produk->getNama();
echo "<br/>";

echo "Harga: Rp.".$produk->getHarga();
echo "<br/>";

echo "Stok: ".$produk->getStok();
echo "<br/>";

echo "Pajak: ".$produk->pajak(). "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.".$produk->total();
