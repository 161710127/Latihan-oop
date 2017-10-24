<?php

class identitas{

	public $nama;
	public $tempat_lahir;
	public $tanggal_lahir;
	public $kelas;
	public $status;

	public function __construct(){
		$this ->nama          = $nama;
		$this ->tempat_lahir  = $tempat_lahir;
		$this ->tanggal_lahir = $tanggal_lahir;
		$this ->kelas         = $kelas;
		$this ->status        = $status;
	}
	public function set_nama($nama){
	$this ->nama -> $nama;
	}
	public function get_nama(){
	return $this  ->$nama;
	}
	public function set_tempat_lahir($tempat_lahir){
	$this ->tempat_lahir = $tempat_lahir;
	}
	public function get_tempat_lahir(){
	return $this ->$tempat_lahir;
	}
	public function set_tanggal_lahir($tanggal_lahir){
	$this ->tanggal_lahir = $tanggal_lahir;
	}
	public function get_tanggal_lahir(){
	return $this ->$tanggal_lahir;
	}
    public function set_kelas($kelas){
	$this ->kelas = $kelas;
	}
    public function get_kelas(){
	return $this ->$kelas;
	}
    public function set_status($status){
	$this ->status = $status;
	}
	public function get_status(){
	return $this ->$status;
	}
}


?>