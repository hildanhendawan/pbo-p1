<?php

class Produk{
    
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function __construct($kode_brg, $nama_brg, $harga_brg, $stok_brg){
        $this->kode = $kode_brg;
        $this->nama = $nama_brg;
        $this->harga = $harga_brg;
        $this->stok = $stok_brg;

        echo 'Selamat Datang Di Toko <br><br>';
    }

    public function pajak(){
        return self::PAJAK * 100;
    }

    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }

    public function __destruct(){
        echo '<br><br>Terimakasih Telah Berbelanja';
    }


}

$produk = new Produk('P0001','Laptop',10000000,5);

echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: Rp.".$produk->harga;
echo "<br/>";

echo "Stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ".$produk->pajak(). "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.".$produk->total();







