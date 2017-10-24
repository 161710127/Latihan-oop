<?php

class bangundatar{
	public $bil1,$bil2;
	function set_nilai_persegi($sisi){
		$this ->bil1 = $sisi;
	}
	function get_nilai_persegi_luas(){
		return $this->bil1  *  $this->$bil1;
	}
	function set_nilai_persegi_panjang($panjang,$lebar){
		$this ->bil1 =$panjang;
		$this ->bil2 =$lebar;
	}
	function get_nilai_persegi_panjang_luas(){
		return $this ->bil1 * $this ->$bil2;
	}
	function get_nilai_persegi_panjang_keliling(){
		return $this ->bil1 + $this ->$bil2 *2;
	}
	function set_nilai_segitiga($alas,$tinggi){
		$this ->bil1 =$alas;
		$this ->bil2 =$tinggi;
	}
	function get_nilai_segitiga_luas(){
		return ($this ->bil1 * $this ->bil2)/2;
	}
}
$bangundatar = new bangundatar;
$bangundatar -> set_nilai_persegi(10);
echo "Luas Persegi :".$bangundatar ->get_nilai_persegi_luas().'<br>';
$bangundatar -> set_nilai_persegi_panjang(8,10);
echo "Luas Persegi Panjang :".$bangundatar -> get_nilai_persegi_panjang_luas().'<br>';
$bangundatar -> set_nilai_segitiga(8,10);
echo "Luas Segitiga :".$bangundatar -> get_nilai_segitiga_luas().'<br>';
?>