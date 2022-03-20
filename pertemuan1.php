<?php

class handphone{
    
    private $merk, $model, $harga, $warna, $ukuranlayar;
    
    public function __construct( $merk, $model, $harga, $warna, $ukuranlayar) {
        $this->merk = $merk;
        $this->model = $model;
        $this->harga = $harga;
        $this->warna = $warna;
        $this->ukuranlayar= $ukuranlayar;
    }
    
    
    public function setmerk($merk){
        $this->merk = $merk;
    }
    
    public function getmerk($merk){
        return $this->merk;
    }
    
    public function setmodel($model){
        $this->model = $model;
    }
    
    public function getmodel($model){
        return $this->model;
    }
    
    public function setharga($harga){
        $this->merk = $merk;
    }
    
    public function getharga($harga){
        return $this->harga;
    }
    
    public function setwarna($warna){
        $this->warna = $warna;
    }
    
    public function getwarna($warna){
        return $this->warna;
    }
    
    public function setukuranlayar($ukuranlayar){
        $this->ukuranlayar = $ukuranlayar;
    }
    
    public function getukuranlayar($ukuranlayar){
        return $this->ukuranlayar;
    }
    
    public function gethandphone() {
        return "$this->merk, $this->model,";
    }
    
    public function getdatahandphone() {
        $hp = "{$this->gethandphone()} (Rp. {$this->harga}) {$this->warna} {$this->ukuranlayar}";
        
        return $hp;
    }
    
}


class laptop {
    
    public $merk, $model, $harga, $warna, $berat;
    
    public function __construct($merk, $model, $harga, $warna, $berat){
        $this->merk = $merk;
        $this->model = $model;
        $this->harga = $harga;
        $this->warna = $warna;
        $this->berat = $berat;
    }
    
    public function setmerk($merk){
        $this->merk = $merk;
    }
    
    public function getmerk($merk){
        return $this->merk;
    }
    
    public function setmodel($model){
        $this->model = $model;
    }
    
    public function getmodel($model){
        return $this->model;
    }
    
    public function setharga($harga){
        $this->merk = $merk;
    }
    
    public function getharga($harga){
        return $this->harga;
    }
    
    public function setwarna($warna){
        $this->warna = $warna;
    }
    
    public function getwarna($warna){
        return $this->warna;
    }
    
    public function setberat($berat){
        $this->berat = $berat;
    }
    
    public function getukuranlayar($ukuranlayar){
        return $this->ukuranlayar;
    }
    
    public function getlaptop() {
        return "$this->merk, $this->model,";
    }
    
    public function getdatalaptop() {
        $lp = "{$this->getlaptop()} (Rp. {$this->harga}) {$this->warna} {$this->berat}";
        
        return $lp;
    }
    
}

    
class HpSamsung extends handphone {
    public $memorieksternal, $ram;
    
    public function __construct($merk, $model, $harga, $warna, $ukuranlayar, $memorieksternal, $ram){
    
        parent::__construct($merk, $model, $harga, $warna, $ukuranlayar);
        
        $this->memorieksternal = $memorieksternal;
        $this->ram = $ram;
    }
    
    
    public function  getdatahandphone(){
        $hp = " Handphone Samsung : " . parent::getdatahandphone() ."  {$this->memorieksternal} GB  {$this->ram} ram.";
        return $hp;
    }
    
}
    
    
class HpIphone extends handphone {
    public $memori;
    
    public function __construct($merk, $model, $harga, $warna, $ukuranlayar, $memori){
    
    parent::__construct($merk, $model, $harga, $warna, $ukuranlayar);
    
    $this->memori = $memori;
    }
    
    public function getdatahandphone(){
        $hp = " Handphone Iphone : " . parent::getdatahandphone() ."  {$this->memori} GB.";
        return $hp;
    }
    
}


class LaptopAsus extends laptop {
    
    public $ram;
    
    public function __construct($merk, $model, $harga, $warna, $berat, $ram){
    
    parent::__construct($merk, $model, $harga, $warna, $berat);

    $this->ram = $ram;
    }
    
    
    public function getdatalaptop(){
        $lp = "Laptop Asus : " . parent::getdatalaptop() ."  {$this->ram}GB. ";
        return $lp;
    }
    
}


class Laptoplenovo extends laptop {
    public $dayatahanbaterai;
    public function __construct($merk, $model, $harga, $warna, $berat){
    
    parent::__construct($merk, $model, $harga, $warna, $berat);

    $this->dayatahanbaterai = $dayatahanbaterai;
    }
    
    public function getdatalaptop(){
        $lp = "Laptop Asus : " . parent::getdatalaptop() ."  {$this->dayatahanbaterai} Jam. ";
        return $lp;
    }
    
}


$samsung = new handphone("Samsung", "A52", "4.999.000", "hitam", "6,5 inci" );
$iphone = new handphone("Iphone", "12 pro max", "15.000.000", "rose gold", "6,7 inci");


$lp1 = new laptop("Asus", "Vivobook 14 A412FA","6.490.000", "hitam","1,5 kg");
$lp2 = new laptop("Lenovo", "IdeaPad slim 3", "6.000.000", "silver", "1,6 kg");


echo $samsung->getdatahandphone();
echo "<br>";
echo $iphone->getdatahandphone();
echo "<br>";
echo $lp1->getdatalaptop();
echo "<br>";
echo $lp2->getdatalaptop();

?>