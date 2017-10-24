<?php 

  class identitas {
    public $nama;
    public $harga;
    public $stok;
    public $merk;

    function __construct ($nama, $harga, $stok, $merk){
      $this->nama = $nama;
      $this->tempat = $harga;
      $this->kelas = $stok;
      $this->status = $merk;
    }
    public function get_nama(){
      return $this->nama;
    }
    public function get_harga(){
      return $this->harga;
    }
    public function get_stok(){
      return $this->stok;
    }
    public function get_merk(){
      return $this->merk;
    }
  }

?>