<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		//$this->load->view('welcome_message');
		/*$data = $this->db->query('SELECT * FROM ci_mhs');
		foreach($data->result_array() as $d){
			echo "NIM : ".$d['nim'].'<br />';
			echo "Nama : ".$d['nama'].'<br />';
			echo "Alamat : ".$d['alamat'].'<hr />';
		}*/
		$data = $this->model->GetMhs();
		/*
		foreach($data as $d){
			echo "NIM : ".$d['nim'].'<br />';
			echo "Nama : ".$d['nama'].'<br />';
			echo "Alamat : ".$d['alamat'].'<hr />';
		}*/
		$this->load->view('tabel',array('dta' => $data));
	}

	public function insert(){
		$res = $this->model->InsertData('ci_mhs',array(
			"nim" => "58140328",
			"nama" => "Lauw",
			"alamat" => "Kartini 14"
		));

		if($res >= 1){
			echo "<h2>Insert Data Sukses</h2>";
		}
		else{
			echo "<h2>Insert Data Gagal</h2>";
		}
	}

	public function update(){
		$res = $this->model->UpdateData('ci_mhs',array(
			"alamat" => "Kartini Dalam 14"
		),array("nim" => "58140328"));

		if($res >= 1){
			echo "<h2>Update Data Sukses</h2>";
		}
		else{
			echo "<h2>Update Data Gagal</h2>";
		}
	}

	public function delete(){
		$res = $this->model->DeleteData('ci_mhs',array("nim" => "58140328"));

		if($res >= 1){
			echo "<h2>Delete Data Sukses</h2>";
		}
		else{
			echo "<h2>Delete Data Gagal</h2>";
		}
	}
	public function cetak($satu = 'Yusuf', $dua='Lauw'){
		echo 'Parameter satu '.$satu.'<br />';
		echo 'Parameter satu '.$dua;
	}
}
