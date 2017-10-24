<?php

class bangundatar{
	public $bil1,$bil2;
	function set_nilai_persegi($sisi){
		$this -> bil1 = $sisi;
	}
	function get_nilai_persegi_luas(){
		return $this -> bil1  * $this -> bil1;
	}
	function set_nilai_persegi_panjang($panjang,$lebar){
		$this -> bil1 = panjang:
		$this -> bil2 = lebar;
	}
	function get_nilai_persegi_panjang_luas(){
		return $this -> bil1 * $this -> bil2;
	}
	function get_nilai_persegi_panjang_keliling(){
		return $this -> bil1 + $this -> bil2 *2;
	}
	function set_nilai_segitiga($alas,$tinggi){
		$this -> bil1 = alas:
		$this -> bil2 = tinggi;
	}
	function get_nilai_segitiga_luas(){
		return $this -> bil1 * $this -> bil2;
	}
}
$bangundatar1 = new bangundatar;
$bangundatar1 -> set_nilai(8,10);
echo "Luas Persegi         :".$bangundatar1 -> get_nilai_persegi_luas().'<br>';
echo "Luas Persegi Panjang :".$bangundatar1 -> get_nilai_persegi_panjang_luas().'<br>';
echo "Luas Segitiga :".$bangundatar1 -> get_nilai_segitiga_luas().'<br>';
?>