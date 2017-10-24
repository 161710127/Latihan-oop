<?php

class rumah{
	public $ruang ='Kamar,Kamar mandi,Ruang Tamu,Ruang keluarga, ruang makan, dan lain - lain';
	public $perabotan ='piring, cangkir, mangkok, kursi, meja dan lain - lain';
	public $jumlah_keluarga = 15;
	public $lantai = 2;
	public $luas_m = 90;
	public $keliling_m = 80;
}
$rumah1= new rumah;
echo " ruang ada :".$rumah1->ruang.'<br>';
echo " perabotan ada :".$rumah1->perabotan.'<br>';
echo " jumlah keluarga :".$rumah1->jumlah_keluarga.'<br>';
echo " lantai ada :".$rumah1->ruang.'<br>';
echo " luasnya :".$rumah1->luas_m.'M<br>';
echo " ruang ada :".$rumah1->ruang.'<br>';

class HP{
	public $Samsung='J1 sampai J7, A1 sampai A5 dan lain lain';
	public $Advan='I5C, C4A, V923 dan lain lain';
	public $Mito='Ji785,a993,fgf99 dan lain lain';
	public $Huawei='cj6690,le47,432ffg dan lain lain';
	public $Vivo=' V7+, V5+, Y21 dan lain lain';
	public $Oppo='Oppo selvie expert, oppo cji882 dan lain lain';
}
$HP1= new HP;
echo " Samsung ->".$HP1->Samsung.'<br>';
echo " Advan ->".$HP1->Advan.'<br>';
echo " Mito ->".$HP1->Mito.'<br>';
echo " Huawei ->".$HP1->Huawei.'<br>';
echo " Vivo ->".$HP1->Vivo.'<br>';
echo " Oppo ->".$HP1->Oppo.'<br>';


?>