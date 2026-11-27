<?php

namespace Pbo\Marketplace;

trait Produk{
    
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    public const PAJAK = 0.11;

    public function __construct(){
        echo 'Selamat Datang Di Toko <br><br>';
    }

    public function setKode($kode){
        $this->kode = $kode;
        return $this;
    }

    public function setNama($nama){
        $this->nama = $nama;
        return $this;
    }

    public function setHarga($harga){
        if($harga <= 0){
            echo "Harga Tidak Boleh Nol";
            exit();
        }
        $this->harga = $harga;
        return $this;
    }

    public function setStok($stok){
        if($stok <= 0){
            echo "Stok Tidak Boleh Nol";
            exit();
        }
        $this->stok = $stok;
        return $this;
    }

    public function getKode(){
        return $this->kode;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getHarga(){
        return $this->harga;
    }

    public function getStok(){
        return $this->stok;
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
