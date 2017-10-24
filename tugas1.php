<?php 
echo '<center>';
	require_once 'tugas.php';

	$identitas1 = new identitas ('Buku', 'duaribu', '30', 'Sidu');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "harga = ".$identitas1->get_harga().'<br>';
	echo "stok = ".$identitas1->get_stok().'<br>';
	echo "merk = ".$identitas1->get_merk().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('pulpen', 'empat ribu', '50', 'faster');

	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "harga = ".$identitas1->get_harga().'<br>';
	echo "stok = ".$identitas1->get_stok().'<br>';
	echo "merk = ".$identitas1->get_merk().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('komputer', 'lima juta', '70', 'acer');

	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "harga = ".$identitas1->get_harga().'<br>';
	echo "stok = ".$identitas1->get_stok().'<br>';
	echo "stok = ".$identitas1->get_kelas().'<br>';
	echo "merk = ".$identitas1->get_merk().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';


	
?>