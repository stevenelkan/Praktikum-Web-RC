<?php

class Buah
{
  
  var $Nama1;
  var $Nama2;
  var $Nama3;

  private ?int $Harga1;
  private ?int $Harga2;
  private ?int $Harga3;

  public function Harga1($Harga1){
  	$this->Harga1 = $Harga1;
  }

  public function Harga2($Harga2){
  	$this->Harga2 = $Harga2;
  }

  public function Harga3($Harga3){
  	$this->Harga3 = $Harga3;
  }

  public function DaftarHarga(){
  	echo '<p>'.$this->Nama1.' = '.$this->Harga1.'/kg<br>'.$this->Nama2.' = '.$this->Harga2.'/kg<br>'.$this->Nama3.' = '.$this->Harga3.'/kg</p>';
  }
}
?>