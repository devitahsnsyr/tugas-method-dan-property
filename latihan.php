<?php
class produk{
  public $namaBarang="Laptop", 
          $merk="zara", 
            $harga=200000;
            // membuat method
            public function cetakProduk(){
                return "Produknya adalah ...";
            }
            public function cetakProduk2(){
                return "$this->namaBarang, $this->merk, $this->harga";
            }
}
$produk1 = new produk();
$produk2 = new produk();
$produk2->namaBarang="hoodie";
$produk2->merk="nasa";
$produk2->harga=280000;

var_dump($produk1);
echo "<br>";
var_dump($produk2);
echo "<br>";
echo $produk1->cetakProduk();
echo "<br>";
echo $produk2->cetakProduk2();
?>


