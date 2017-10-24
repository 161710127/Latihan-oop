<?php
echo "|| Perhitungan bilangan 21 dengan bilangan 3".'<br>'.'<br>';

class kabataku{
	public $bil1,$bil2;

	function set_nilai($bilangan1,$bilangan2){
		$this -> bil1 = $bilangan1;
		$this -> bil2 = $bilangan2;
	}
	function get_nilai(){
		return $this -> bil1 + $this -> bil2;
	}
	function get_nilai1(){
		return $this -> bil1 - $this -> bil2;
	}
	function get_nilai2(){
		return $this -> bil1 * $this -> bil2;
	}
	function get_nilai3(){
		return $this -> bil1 / $this -> bil2;
	}
}
$kabataku1 = new kabataku;
$kabataku1 -> set_nilai(21,3);
echo "Hasil Penjumlahan :". $kabataku1 -> get_nilai().'<br>';
echo "Hasil Pengurangan :". $kabataku1 -> get_nilai1().'<br>';
echo "Hasil Perkalian :". $kabataku1 -> get_nilai2().'<br>';
echo "Hasil Pembagian :". $kabataku1 -> get_nilai3().'<br>';
?>